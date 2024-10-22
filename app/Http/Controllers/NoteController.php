<?php

namespace App\Http\Controllers;

use App\Models\Body;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NoteController extends Controller
{
    public function createNote(Request $request){
        $note = $request->validate([
            'title'=>['required','string'],
            'description'=>['required','string'],
            'visibility'=>['required','string'],
            'cover' => ['nullable', 'file', 'mimes:jpg,png,pdf,gif', 'max:51200'],
            

        ]);

        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $filePath = $file->store('uploads/cover', 'public'); // Store in 'public/uploads'
            $note['cover'] = $filePath; // Save file path in database
        }

        $note['title']=strip_tags($note['title']);
        $note['description']=strip_tags($note['description']);
       
        $note['user_id'] = auth()->guard('web')->id();

        Note::create($note);

        return redirect('/');
        

    }

    public function getNote(Note $note,Request $request){
        $user = auth()->user();
        

        if($note->visibility == "private" 
        &&
         auth()->guard('web')->user()->name != $note->user->name){
            return redirect()->back();
        }
        else{
            
                
                $body = $note->noteBodys()->orderBy('created_at','asc')->get();
                return view('note', ['note' => $note,'bodies'=>$body,'user'=>$user,]);
            

        
        }
            
    }

    public function getEditNote(Note $note,Request $request){
        if (auth()->guard('web')->user()->id !== $note['user_id']) {
            return redirect('/');
        }

        return view('edit-note', ['note' => $note]);
    }

    public function deleteNote(Note $note) {
        if (auth()->guard('web')->user()->id === $note['user_id']) {
            if (!is_null($note->cover)){
                $image = public_path('storage/'.$note->cover);
                if (File::exists($image)){
                    unlink($image);
                }
            }
            $note->delete();
        }
        return redirect('/');
    }

    public function actuallyUpdateNote(Note $note, Request $request) {
        if (auth()->guard('web')->user()->id !== $note['user_id']) {
            return redirect('/');
        }
        
        $incomingFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'visibility' => 'required',
            'cover' => ['nullable', 'file', 'mimes:jpg,png,pdf,gif', 'max:51200'],
        ]);
        
        if ($request->hasFile('cover')) {
            
            $file = $request->file('cover');
            $filePath = $file->store('uploads/cover', 'public'); 
            $incomingFields['cover'] = $filePath; 
        
            
            $oldCover = public_path('storage/' . $note->cover);
            if (File::exists($oldCover)) {
                unlink($oldCover);
            }
        } else {
            
            $incomingFields['cover'] = $note->cover;
        }
        
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['description'] = strip_tags($incomingFields['description']);
        
        $note->update($incomingFields);
        return redirect('/');
    }

    public function userNotes(){
        
            $notes =[];
            $user = auth()->user();
            //    $posts = Post::all();
                    if(auth()->guard('web')->check()){
                        $user = auth()->user();
                        $notes = $user->userNotes()->latest()->get();
                    }
            
                    return view('userNotes',['notes' => $notes]);
        
    }
    public function communityNotes(){
        
            $user = auth()->user();
            $public_notes=Note::where('visibility','public')->get();
            

            
            
                    return view('Home',['notes'=>$public_notes,'user'=>$user]);
       
    }
}

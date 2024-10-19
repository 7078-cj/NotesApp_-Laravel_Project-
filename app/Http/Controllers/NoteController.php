<?php

namespace App\Http\Controllers;

use App\Models\Body;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function createNote(Request $request){
        $note = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'visibility'=>'required'
            

        ]);

        $note['title']=strip_tags($note['title']);
        $note['description']=strip_tags($note['description']);
       
        $note['user_id'] = auth()->guard('web')->id();

        Note::create($note);

        return redirect('/');
        

    }

    public function getNote(Note $note,Request $request){
        $user = auth()->user();


        if($note->visibility == "private" && auth()->guard('web')->user()->name != $note->user->name){
            return redirect()->back();
        }
        else{
            if (auth()->guard('web')->check()) {
                
                $body = $note->noteBodys()->orderBy('created_at','asc')->get();
                return view('note', ['note' => $note,'bodies'=>$body,'user'=>$user]);
            }

        return redirect('/');
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
            'description'=>'required',
            'visibility'=>'required'
            
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $note['description']=strip_tags($note['description']);
       

        $note->update($incomingFields);
        return redirect('/');
    }

    public function userNotes(){
        if (auth()->guard('web')->check()) {
            $notes =[];
            $user = auth()->user();
            //    $posts = Post::all();
                    if(auth()->guard('web')->check()){
                        $user = auth()->user();
                        $notes = $user->userNotes()->latest()->get();
                    }
            
                    return view('userNotes',['notes' => $notes]);
        } else {
            return redirect('/login-user'); // Otherwise, redirect to the login page
        }
    }
    public function communityNotes(){
        if (auth()->guard('web')->check()) {
            $user = auth()->user();
            $public_notes=Note::where('visibility','public')->get();
            
            
                    return view('communityNotes',['notes'=>$public_notes,'user'=>$user]);
        } else {
            return redirect('/login-user'); 
        }
    }
}

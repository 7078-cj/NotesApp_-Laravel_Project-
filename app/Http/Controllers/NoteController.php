<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function createNote(Request $request){
        $note = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'body'=>'required'

        ]);

        $note['title']=strip_tags($note['title']);
        $note['description']=strip_tags($note['description']);
        $note['body']=strip_tags($note['body']);
        $note['user_id'] = auth()->guard('web')->id();

        Note::create($note);

        return redirect('/');
        

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
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $note['description']=strip_tags($note['description']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);

        $note->update($incomingFields);
        return redirect('/');
    }
}

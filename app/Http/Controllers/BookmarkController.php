<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function postBookMark(Note $note,Request $request){

        $data = [
            'user_id'=>Auth::user()->id,
            'note_id'=>$note->id
        ];

        Bookmark::create($data);

        return redirect()->back();

    }

    public function removeBookMark(Bookmark $bookmark,Request $request){

        $bookmark->delete();
        return redirect()->back();

    }

    public function showBookMark(){

        $bookmarks = auth()->user()->Bookmarks()->latest()->get();

        return view('bookMarks',['bookmarks'=>$bookmarks]);
    }
}

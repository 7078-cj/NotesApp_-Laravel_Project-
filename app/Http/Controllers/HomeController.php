<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request){
        
        
            $notes =[];
            $public_notes=Note::where('visibility','public')->get();
            

            $user = auth()->user();
            //    $posts = Post::all();
                    if(auth()->guard('web')->check()){
                        $user = auth()->user();
                        $notes = $user->userNotes()->latest()->get();
                    }
            
                    return view('Home',['notes' => $notes,"publicnotes"=>$public_notes,'user'=>$user]);
        
       
    }
}

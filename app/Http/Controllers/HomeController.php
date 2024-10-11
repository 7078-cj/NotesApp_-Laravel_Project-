<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request){
        
        if (auth()->guard('web')->check()) {
            $notes =[];
            //    $posts = Post::all();
                    if(auth()->guard('web')->check()){
                        $user = auth()->user();
                        $notes = $user->userNotes()->latest()->get();
                    }
            
                    return view('Home',['notes' => $notes]);
        } else {
            return redirect('/login-user'); // Otherwise, redirect to the login page
        }
       
    }
}

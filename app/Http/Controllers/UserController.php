<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request){
        $registration = $request->validate([
            'name'=>['required','min:3','max:10',Rule::unique('users','name')],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>['required','min:8','max:200']
        ]);


        $registration['password'] = bcrypt($registration['password']);
        $user = User::create($registration);
        auth()->guard('web')->login($user);

        return redirect('/login-user');
    }

    public function logout(){
        auth()->guard('web')->logout();
        return redirect('/');
        
    }

    public function login(Request $request){
        $login = $request->validate([
            'login_name'=>'required',
            'login_password'=>'required'
        ]);

        if (auth()->guard('web')->attempt(['name' => $login['login_name'],'password'=>$login['login_password']])){
            $request->session()->regenerate();
        }

        return redirect('/');
    }
}

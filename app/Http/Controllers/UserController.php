<?php

namespace App\Http\Controllers;


use App\Models\Bookmark;
use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
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

        return redirect('/');
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

    public function editUser(User $user,Request $request){
        return view('edit-user',['user'=>$user]);
    }

    public function updateUser(User $user,Request $request){
        $update = $request->validate([
            'name'=>['required','min:3','max:50'],
            'email'=>['required','email'],
            'avatar' => ['nullable', 'file', 'mimes:jpg,png,pdf,gif', 'max:20480'],
            'password'=>['nullable','min:8','max:200']
        ]);

        if ($request->hasFile('avatar')) {
            $avatar = public_path('storage/' . $user->avatar);
            
            // Check if the avatar exists and delete it
            if ($user->avatar && File::exists($avatar)) {
                unlink($avatar);
            }
    
            $file = $request->file('avatar');
            $filePath = $file->store('uploads/avatar', 'public'); // Store in 'public/uploads'
            $update['avatar'] = $filePath; // Save new avatar path
        }
        else{
            $update['avatar'] = $user->avatar;
        }

        if (empty($update['password'])) {
            $update['password'] = $user->password; // Keep existing password
        } else {
            $update['password'] = bcrypt($update['password']); // Encrypt new password
        }


        
        
        $user->update($update);
        
        
        return redirect('/');
    }
    public function showDeleteNote(User $user){
       
        return view('delete-User',['user' => $user]);
    }

    public function deleteUser(User $user,Request $request){
        if (auth()->guard('web')->check()) {
            if (!is_null($user->avatar)){
                $avatar = public_path('storage/'.$user->avatar);
                if (File::exists($avatar)){
                    unlink($avatar);
                }
            }
            $user = auth()->user();
            $userNotes = $user->userNotes()->latest()->get();

            foreach($userNotes as $userNote){

                $note = Note::find($userNote->id);

                if (!is_null($note->cover)){
                    $image = public_path('storage/'.$note->cover);
                    if (File::exists($image)){
                        unlink($image);
                    }
                }
                
                $bodies = $body = $note->body()->get();
                foreach($bodies as $body){
                    if (!is_null($body->image)){
                        $image = public_path('storage/'.$body->image);
                        if (File::exists($image)){
                            unlink($image);
                        }
                    }
                }

                //for the user created note to delete to other users bookmark
                if(BookMark::where('note_id', $note->id)
                 ->exists()){
                BookMark::where('note_id', $note->id)
                      ->delete();
            }
                
                $note->delete();
            }

            //for the bookmarked note from other users
            $bookmarks = $user->Bookmarks()->latest()->get();
            foreach($bookmarks as $bookmark){
                $bm = Bookmark::find($bookmark->id);
                $bm->delete();
            }
            
            

            $user->delete();
        }
        return  redirect('login-user');
    }
    
}

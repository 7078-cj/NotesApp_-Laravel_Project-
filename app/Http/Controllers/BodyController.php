<?php

namespace App\Http\Controllers;

use App\Models\Body;
use App\Models\Note;
use Illuminate\Http\Request;

class BodyController extends Controller
{
    public function createBody(Note $note,Request $request){
        if (auth()->guard('web')->check()) {
            $data = $request->validate(
                [
                    'image' => ['nullable', 'file', 'mimes:jpg,png,pdf', 'max:2048'], // Each rule in a separate element
                    'message' => ['nullable', 'string'],
                ]
                );
            
                if ($request->hasFile('image')) {
                    $file = $request->file('image');
                    $filePath = $file->store('uploads/images', 'public'); // Store in 'public/uploads'
                    $data['image'] = $filePath; // Save file path in database
                }

                
                
                $data['user_id'] = auth()->guard('web')->id();
                $data['note_id'] = $note->id;

                Body::create($data);
        }
        return redirect('/');
        
    }

    public function getUpdateBody(Body $body,Request $request){
        if (auth()->guard('web')->check()) {
        return view('updateBody',['body'=>$body]);
        }
        return redirect('/');
    }
    public function UpdateBody(Body $body,Request $request){
        if (auth()->guard('web')->check()) {
            $data = $request->validate(
                [
                    'image'=>['string'],
                    'message'=>['mimes:png,jpeg,jpg']
                ]
                );
            
                if ($request->hasFile('image')){
                    $name = $request->file('image')->getClientOriginalName();
                    $request->file('image')->store('public/images/');
                }

                $data["image"] = $name;
            

                $body->update($data);
            }
            return redirect('/');
    }

    public function deleteBody(Body $body,Request $request){
        if (auth()->guard('web')->check()) {
            $body->delete();
        }
        return redirect('/');
    }
}

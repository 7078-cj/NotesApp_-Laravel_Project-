<?php

namespace App\Http\Controllers;

use App\Models\Body;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
       return redirect()->back()->with('message', 'Operation successful!');
        
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
                    'image' => ['nullable', 'file', 'mimes:jpg,png,pdf', 'max:2048'], // Each rule in a separate element
                    'message' => ['nullable', 'string'],
                ]
                );
            
                if ($request->hasFile('image')) {
                    $image = public_path('storage/'.$body->image);
                    if (File::exists($image)){
                        unlink($image);
                    }
                    $file = $request->file('image');
                    $filePath = $file->store('uploads/images', 'public'); // Store in 'public/uploads'
                    $data['image'] = $filePath; // Save file path in database
                }

                else{
                    $data["image"] = $body->image;
                }
                
                $body->update($data);
            }
            return redirect("/note/$body->note_id" );
    }

    public function deleteBody(Body $body,Request $request){
        if (auth()->guard('web')->check()) {
            if (!is_null($body->image)){
                $image = public_path('storage/'.$body->image);
                if (File::exists($image)){
                    unlink($image);
                }
            }
            $body->delete();
        }
        return  redirect()->back();
    }
}

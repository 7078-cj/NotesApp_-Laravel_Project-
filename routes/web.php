<?php

use App\Http\Controllers\BodyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\HomeController;


Route::middleware('authenticated')->group(function (){
    Route::get('/login-user', function () {
    return view('Login');
    });

    Route::post('/register',[UserController::class,"register"]);
    
    Route::post('/login',[UserController::class,'login']);
});

Route::post('/logout',[UserController::class,'logout']);


Route::middleware('can-view-notes')->group(function (){

    Route::get('/',[HomeController::class,"home"]);
    Route::get('/create',[NoteController::class,"showCreateNote"]);
    Route::post('/create-note',[NoteController::class,'createNote']);
    Route::get('/note/{note}',[NoteController::class,'getNote']);
    Route::get('/edit-note/{note}',[NoteController::class,'getEditNote']);
    Route::put('/edit-note/{note}', [NoteController::class, 'actuallyUpdateNote']);
    Route::delete('/delete-note/{note}', [NoteController::class, 'deleteNote']);

    Route::get('/userNotes',[NoteController::class,'userNotes']);
    Route::get('/communityNotes',[NoteController::class,'communityNotes']);

    Route::post('/create-body/{note}',[BodyController::class,'createBody']);
    Route::get('update-body/{body}',[BodyController::class,'getUpdateBody']);
    Route::put('updates-body/{body}',[BodyController::class,'UpdateBody']);
    Route::delete('delete-body/{body}',[BodyController::class,'deleteBody']);

    //user
    Route::get('/editUser/{user}',[UserController::class,'editUser']);
    Route::put('/updateUser/{user}',[UserController::class,'updateUser']);

});

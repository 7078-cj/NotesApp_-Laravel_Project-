<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,"home"]);
Route::get('/login-user', function () {
    


return view('Login');
});
Route::get('/register-user', function () {
    


    return view('Register');
    });

Route::post('/register',[UserController::class,"register"]);
Route::post('/logout',[UserController::class,'logout']);
Route::post('/login',[UserController::class,'login']);

Route::post('/create-note',[NoteController::class,'createNote']);
Route::get('/edit-note/{note}',[NoteController::class,'getEditNote']);
Route::put('/edit-note/{note}', [NoteController::class, 'actuallyUpdateNote']);
Route::delete('/delete-note/{note}', [NoteController::class, 'deleteNote']);
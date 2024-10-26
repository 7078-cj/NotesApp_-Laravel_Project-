@extends('index')
@include('components.navbar')
<div class="bg-white border border-4 rounded-lg shadow relative m-10 font-robotoMono">

    <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
            Edit User
        </h3>
        <a href="/showDeleteUser/{{ Auth::user()->id }}" class="text-white bg-slate-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Deactivate User</a>
        <a href="#" onclick="history.back()"><button class="text-white bg-slate-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" >Back</button></a>
        
    </div>

    <div class="p-6 space-y-6">
        <form action="/updateUser/{{ $user->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="avatar" class="text-sm font-medium text-gray-900 block mb-2">Profile Pic</label>
                    <input type="file" name="avatar" id="avatar" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"  >
                </div>
              
                <div class="col-span-6 sm:col-span-3">
                    <label for="name" class="text-sm font-medium text-gray-900 block mb-2">UserName:</label>
                    <input type="text" name="name"  value="{{$user->name}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"  required="">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="email" class="text-sm font-medium text-gray-900 block mb-2">email:</label>
                    <input type="email" name="email"  value="{{$user->email}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"  required="">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="password" class="text-sm font-medium text-gray-900 block mb-2">password:</label>
                    <input type="password" name="password"  class="focus:outline-none shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"  >
                </div>
                

                
            </div>
             <div class="p-6 border-t border-gray-200 rounded-b">
                <button class="text-white bg-slate-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">Update User</button>
            </div>
        </form>
    </div>


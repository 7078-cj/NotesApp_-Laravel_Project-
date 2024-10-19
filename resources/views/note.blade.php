@extends('index')
@include('components.navbar')
    <div style="background-color:rgb(219, 219, 219); padding: 10px; margin: 10px;">
        <h3>Title:{{$note->title}} </h3>
        <h3>Notes Creator: {{$note->user->name}}</h3>
        <h3> email:{{$note->user->email}}</h3>
        <h2>Description:{{$note->description}}</h2>
        <h1>{{$note->body}}</h1>
        
    </div>
<div class=" h-100 p-20 overflow-scroll flex-1 flex flex-row gap-4 bg-gradient-to-b from-cyan-100 to-indigo-300 flex-wrap">
       
       
            
            @if ($bodies)
            @foreach ($bodies as $body )
             @include('components.bodyCard')
            @endforeach
        @endif
        </div>
       
    
    <div class="sticky z-10">
        <form action="/create-body/{{ $note->id }}" method="POST" enctype="multipart/form-data" class=" bottom-0 left-0 p-4 w-screen">
            @csrf
           
            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-slate-400 dark:border-slate-400">
                <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-slate-100">
                    
                    <textarea id="comment" name="message" class="w-full text-sm text-gray-900 bg-white border-0 dark:bg-slate-200 focus:ring-0  dark:placeholder-slate-400 px-5 py-2.5 text-center" placeholder="Write a Note..." required ></textarea>
                </div>
                <div class="flex items-center justify-center gap-60 px-3 py-2 border-t bg-gradient-to-r from-indigo-200 to-blue-100">
                
                    <div class="grid w-full max-w-xs items-center gap-1.5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z"/>
                        </svg>
                        
                        <input id="picture" type="file"  name="image" class="flex h-10 w-full rounded-md border border-input bg-white px-3 py-2 text-sm text-gray-400 file:border-0 file:bg-transparent file:text-gray-600 file:text-sm file:font-medium">
                    </div>
                    <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-slate-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                        Post Note Body
                    </button>
                    </div>
                </div>
            
        </form>
    </div>
</div>
    

@extends('index')
<div class="flex flex-col flex-1 max-w-screem max-h-full">


@include('components.navbar')   
<div class="flex flex-col items-center justify-center flex-1 gap-3 max-h-full bg-gradient-to-b from-indigo-500 to-sky-300">
        
        <h1 class="p-5 bg-slate-100 m-4 rounded-md text-lg">Community Notes</h1>
        <div class="min-h-screen pt-4">
              <div class="flex flex-row flex-1 gap-11 flex-wrap items-center justify-center  ">
                    
                    @foreach ($notes as $note )
                    
                    @include('components.notesCard')
                    @endforeach
                </div>
        </div>
        
        
        
              
                    
       
        
    
        
</div>
</div>



@vite('resources/js/menu.js')


    {{-- @include('components.communityNotes') --}}



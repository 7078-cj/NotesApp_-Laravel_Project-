@extends('index')
    @include('components.navbar')
<div class="flex flex-row gap-3">
        <div class="">
            @include('components.leftMenu')    
        </div>
        
        <div class="bg-gradient-to-b from-indigo-500 to-sky-300 w-screen p-5">
              <div class="flex flex-row gap-11 flex-wrap m-5">
                    
                    @foreach ($notes as $note )
                    
                    @include('components.notesCard')
                    @endforeach
                </div>
        </div>
        
              
                    
       
        
    
        
</div>


    {{-- @include('components.communityNotes') --}}



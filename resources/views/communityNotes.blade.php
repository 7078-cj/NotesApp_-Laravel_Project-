@extends('index')
@include('components.navbar')
<div class="flex flex-row gap-3">
    <div class="sm:hidden  md:block lg:block ">
        @include('components.leftMenu')    
    </div>
    
    <div class="bg-gradient-to-b from-indigo-500 to-sky-300 p-9 w-full">
          <div class="flex flex-row gap-11 flex-wrap items-center justify-center m-5">
                
                @foreach ($notes as $note )
                
                @include('components.notesCard')
                @endforeach
            </div>
    </div>

    <div class="sm:block fixed bottom-0 -right-1 z-10 md:hidden lg:hidden">
        button
    </div>
    
          
                
   
    

    
</div>

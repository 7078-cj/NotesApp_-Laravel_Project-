@extends('index')
    @include('components.navbar')
<div class="flex flex-row gap-3 ">
        <div class="sm:hidden  md:block lg:block ">
            @include('components.leftMenu')    
        </div>
        
        <div class="bg-gradient-to-b from-indigo-500 to-sky-300 w-full p-10">
              <div class="flex flex-row gap-11 flex-wrap items-center justify-center  ">
                    
                    @foreach ($notes as $note )
                    
                    @include('components.notesCard')
                    @endforeach
                </div>
        </div>

        <div class="sm:block fixed bottom-0 -right-1 z-10 m-10 bg-slate-200 p-15 rounded-full
        md:hidden lg:hidden">
            <button
            title="Add New"
            class="group cursor-pointer outline-none hover:rotate-90 duration-300"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="50px"
              height="50px"
              viewBox="0 0 24 24"
              class="stroke-slate-400 fill-none group-hover:fill-slate-800 group-active:stroke-slate-200 group-active:fill-slate-600 group-active:duration-0 duration-300"
            >
              <path
                d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z"
                stroke-width="1.5"
              ></path>
              <path d="M8 12H16" stroke-width="1.5"></path>
              <path d="M12 16V8" stroke-width="1.5"></path>
            </svg>
          </button>
        </div>
        
              
                    
       
        
    
        
</div>


    {{-- @include('components.communityNotes') --}}



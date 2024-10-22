@extends('index')
<div class="flex flex-col flex-1 max-w-screem max-h-full">


@include('components.navbar')   
<div class="flex flex-row flex-1 gap-3 max-h-full bg-gradient-to-b from-indigo-500 to-sky-300">
        <div class="hidden  md:inline-block lg:inline-block xl:inline-block ">
            @include('components.leftMenu')    
        </div>
        
        <div class="min-h-screen pt-4">
              <div class="flex flex-row flex-1 gap-11 flex-wrap items-center justify-center  ">
                    
                    @foreach ($notes as $note )
                    
                    @include('components.notesCard')
                    @endforeach
                </div>
        </div>
        <div class="flex flex-col fixed items-start justify-end align-top gap-10  bottom-10 -right z-10 mb-12">
          <div class="block h-20 w-30 p-5 m-10 md:hidden lg:hidden xl:hidden ">
            <form class="flex flex-col bg-slate-200 p-5 mb-4 rounded-md" action="/create-note" method="POST">
              @csrf
              <input  name="title" placeholder="Title" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" type="text">
              
              <select name="visibility" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" id="product">
                <option value="public">Public</option>
                    <option value="private">Private</option>
              </select>
              
              <textarea placeholder="Desctiption" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="description"></textarea>
        
              <button class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150" type="submit">Submit</button>
            </form>
          </div>

          <div class="sm:block bg-slate-200 p-15 rounded-full
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
        
        
              
                    
       
        
    
        
</div>
</div>


    {{-- @include('components.communityNotes') --}}



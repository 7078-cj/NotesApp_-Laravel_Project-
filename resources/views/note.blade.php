@extends('index')
@include('components.navbar')
    
    <div
        class="flex flex-col justify-end bg-gradient-to-b from-cyan-100 to-indigo-300 max-w-screen bg-white border border-gray-200 font-robotoMono min-h-screen"
    >
        
        <div class="flex flex-col items-center justify-center bg-slate-100 p-4">
            
            @if ($note->cover)
            <div class="flex flex-col items-center justify-center h-80 m-2.5 max-w-[500px] overflow-hidden text-white rounded-md">
             
              <img src="{{ asset('storage/' .$note->cover) }}" class=""/>
              
            </div>
            @endif
            
            <div class="flex flex-col items-center justify-center">
                <p class="text-xl font-semibold text-gray-800">{{$note->title}}</p>
            <p class="mt-2 text-gray-600 text-center">
                {{$note->description}}
            </p>
            </div>
            
            <div class="flex flex-col gap-3 items-center justify-center text-center mt-4 text-gray-600 p-5 md:flex-row lg:flex-row xl:flex-row">
                <h3 class="flex flex-row items-center justify-center text-center ">Notes Creator: @if ($note->user->avatar)
                    <img src="{{ asset('storage/' . $note->user->avatar) }}" alt="" class="h-20 w-20 rounded-full p-4">
                @endif{{$note->user->name}}</h3>
                <h1 class="hidden md:inline lg:inline xl:inline ">
                    ||
                </h1>
                <h3> email:{{$note->user->email}}</h3>
                </div>
                @if ($user->name === $note->user->name)
        <div class="flex flex-row justify-center gap-2 items-center py-3 ">
          
          

          <p><a href="/edit-note/{{$note->id}}" class="EditBtn">
              <div class="flex gap-2 text-slate-600 hover:scale-110 duration-200 hover:cursor-pointer">
              <svg class="w-6 stroke-green-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
              </svg>
              <button class="font-semibold text-sm text-green-700">Edit</button>
          </div>
          </a></p>
          
            
                <a href="/show-delete-note/{{ $note->id }}">
                  <div class="flex gap-2 text-gray-600 hover:scale-110 duration-200 hover:cursor-pointer">
                    <svg class="w-6 stroke-red-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                    <button class="font-semibold text-sm text-red-700">Delete</button>
                  </div>
                </a>
        
                          
        </div>
      @endif
            </div>


         
        <div class=" flex flex-row flex-1 gap-4  flex-wrap items-center justify-center min-h-[250px]">
       
       
            
           
            @foreach ($bodies as $body )
             @include('components.bodyCard')
            @endforeach
        </div>
            <div class=" flex flex-col bottom-1 ">
                <form action="/create-body/{{ $note->id }}" method="POST" enctype="multipart/form-data" 
                    class="h-40 ">
                    @csrf
                   
                    <div class="w-full border border-gray-200 rounded-lg bg-gray-50 dark:bg-slate-400 dark:border-slate-400">
                        <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-slate-100">
                            
                            <textarea id="comment" name="message" class="w-full text-sm text-gray-900 bg-white border-0 dark:bg-slate-200 focus:ring-0  dark:placeholder-slate-400 px-5 py-2.5 text-center" placeholder="Write a content..." required ></textarea>
                        </div>
                        <div class="flex flex-row items-center justify-center gap-10 px-3 py-2 border-t bg-gradient-to-r from-indigo-200 to-blue-100">
                        
                            <div class=" flex flex-col items-center gap-1.5">
                                <div class="flex flex-row gap-2 justify-center items-center">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                        <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z"/>
                                    </svg>
                                    /
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M18 7c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v10c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-3.333L22 17V7l-4 3.333V7zm-1.998 10H4V7h12l.001 4.999L16 12l.001.001.001 4.999z"></path></svg>
                                    <h1>| up to 45MB</h1>
                                </div>
                                
                                <input id="picture" type="file"  name="image" class="flex h-10 w-full rounded-md border border-input bg-white px-3 py-2 text-sm text-gray-400 file:border-0 file:bg-transparent file:text-gray-600 file:text-sm file:font-medium">
                            </div>
                            <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-slate-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                Post Note Content
                            </button>
                            </div>
                    </div>
                    
                </form>
            </div>
            
        
           
    
    
    </div>

    

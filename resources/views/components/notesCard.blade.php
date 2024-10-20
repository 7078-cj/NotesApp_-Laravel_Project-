{{-- <div class="note-card">
    <div class="header">
        <h2 class="visibility">{{ $note->visibility }}</h2>
        <div class="btns">
            <p><a href="/edit-note/{{$note->id}}" class="EditBtn">Edit</a></p>
                    <form action="/delete-note/{{$note->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="DeleteBtn">Delete</button>
                    </form>
        </div>
    </div>
    <div class="content">
        Title:{{$note->title}} 
        <h2 class="description">description:{{$note->description}}</h2>
    </a>
       
    </div>
    <hr>
   

    <div class="footer">
        <h6> created by {{$note->user->name}} </h6>
        <h6>email:{{$note->user->email}}</h6>
        <p class="date">Created At:  {{ $note->created_at }}</p>
    </div>
                    
                    
</div> --}}


<div
  class="group flex flex-col justify-start items-start gap-2 w-96 h-65 duration-500 relative rounded-lg p-4 bg-slate-100 hover:-translate-y-2 hover:shadow-xl shadow-gray-300"
>
@if ($user->name === $note->user->name)
  <div
    class="absolute duration-700 shadow-md group-hover:-translate-y-4 group-hover:-translate-x-4 -bottom-10 -right-10 w-1/2 h-1/2 rounded-lg bg-gradient-to-t from-sky-200 to-slate-50"
    alt="image here"
  >
  
  <div class="flex flex-col justify-center gap-2 items-center py-3 ">

    <p><a href="/edit-note/{{$note->id}}" class="EditBtn">
        <div class="flex gap-2 text-slate-600 hover:scale-110 duration-200 hover:cursor-pointer">
        <svg class="w-6 stroke-green-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
          <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
        </svg>
        <button class="font-semibold text-sm text-green-700">Edit</button>
    </div>
    </a></p>

                    <form action="/delete-note/{{$note->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        
                            
                            <div class="flex gap-2 text-gray-600 hover:scale-110 duration-200 hover:cursor-pointer">
                              <svg class="w-6 stroke-red-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                              <button class="font-semibold text-sm text-red-700">Delete</button>
                            </div>
                       
                    </form>
  </div>
  
</div>
@endif
  <div class="">
    <h2 class="text-2xl font-bold mb-2 text-gray-800"><a href="/note/{{ $note->id }}" class="hover:text-slate-600 flex flex-row gap-2">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
      </svg>
      {{$note->title}}
    </a></h2>
    <p class="text-gray-700 line-clamp-3">
        Note Description: <p>{{$note->description}}</p>
        <br>
        created by: <p class="flex flex-row justify-center items-center gap-4">@if ($note->user->avatar)
          <img src="{{ asset('storage/' .$note->user->avatar) }}" alt="" class="h-20 rounded-full p-4">
          @else
          <svg xmlns="http://www.w3.org/2000/svg" 
          width="24" height="24" viewBox="0 0 24 24" 
          style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
          <path d="M12 18c4 0 5-4 5-4H7s1 4 5 4z"></path>
          <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
          <path d="m13 12 2 .012c.012-.462.194-1.012 1-1.012s.988.55 1 1h2c0-1.206-.799-3-3-3s-3 1.794-3 3zm-5-1c.806 0 .988.55 1 1h2c0-1.206-.799-3-3-3s-3 1.794-3 3l2 .012C7.012 11.55 7.194 11 8 11z">
            </path>
          </svg>
          
      @endif
      
      {{$note->user->name}}</p>

    </p>
  </div>
  <div
    class=" {{$note->visibility=="public" ? "bg-blue-200":"bg-red-200" }} text-gray-800 mt-6 rounded p-2 px-6"
  >
  {{ $note->visibility }}
  
  </div>
  
  
</div>

    {{-- <div class="note-card">
        <div class="header">
            <span class="visibility">{{ $note->visibility }}</span>
            <div class="btns">
                <p><a href="/edit-note/{{$note->id}}" class="EditBtn">Edit</a></p>
                        <form action="/delete-note/{{$note->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="DeleteBtn">Delete</button>
                        </form>
            </div>
            
            
        </div>

        <div class="content">
            <a href="/note/{{ $note->id }}">
        
            <h3 class="title">{{$note->title}}</h3>
            <p class="description">
                {{$note->description}}
            </p>
        </a>
        </div>

        <div class="footer">
            
            </div>
        
        </div>
        
    </div> --}}

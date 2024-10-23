{{-- 



<div class="w-80 p-4 bg-white rounded-lg shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out animate-slide-in-bottom">
  @if ($note->cover)
  <img class="w-full h-40 object-cover rounded-t-lg" alt="Card Image" src="{{ asset('storage/' .$note->cover) }}">
  @endif
  <div class="p-4">
      <h2 class="text-xl  font-semibold"><a href="/note/{{ $note->id }}" class="EditBtn">
              {{$note->title}}
            </a></h2>

      <p class="text-gray-600">{{$note->description}}</p>
      <div class="flex items-center py-5">
        @if ($note->user->avatar)
          <img src="{{ asset('storage/' .$note->user->avatar) }}" alt="Avatar" class="w-8 h-8 rounded-full mr-2 object-cover">
        @endif
          <span class="text-gray-800 font-semibold">{{$note->user->name}}</span>
      </div>
      <div class="flex justify-between items-center mt-4">
        <div
        class=" {{$note->visibility=="public" ? "bg-blue-200":"bg-red-200" }} text-gray-800 mt-6 rounded p-2 px-6"
      >
      {{ $note->visibility }}
      
      
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
          <form action="/delete-note/{{$note->id}}" method="POST">
            @csrf
            @method('DELETE')
            
                
                <div class="flex gap-2 text-gray-600 hover:scale-110 duration-200 hover:cursor-pointer">
                  <svg class="w-6 stroke-red-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                  <button class="font-semibold text-sm text-red-700">Delete</button>
                </div>
          
        </form>
                          
        </div>
      @endif       

      </div>
  </div>
</div> --}}

<a href="/note/{{ $note->id }}">
  <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-80">
    @if ($note->cover)
    <div class="relative h-56 m-2.5 overflow-hidden text-white rounded-md">
     
      <img src="{{ asset('storage/' .$note->cover) }}" />
      
    </div>
    @endif
    <div class="p-4">
      <div class="mb-4 rounded-full {{$note->visibility=="public" ? "bg-blue-400":"bg-red-400" }} py-0.5 px-2.5 border border-transparent text-xs text-white transition-all shadow-sm w-20 text-center">
        {{ $note->visibility }}
      </div>
      <h6 class="mb-2 text-slate-800 text-xl font-semibold">
        {{$note->title}}
      </h6>
      <p class="text-slate-600 leading-normal font-light">
        {{$note->description}}
      </p>
    </div>
 
    <div class="flex items-center justify-between p-4">
      <div class="flex items-center">
        @if ($note->user->avatar)
        <img
         
          src="{{ asset('storage/' .$note->user->avatar) }}"
          class="relative inline-block h-8 w-8 rounded-full"
        />
        @endif
        <div class="flex flex-col ml-3 text-sm">
          <span class="text-slate-800 font-semibold">{{ $note->user->name }}</span>
          <span class="text-slate-600">
            {{ $note->created_at }}
          </span>
        </div>
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
          <form action="/delete-note/{{$note->id}}" method="POST">
            @csrf
            @method('DELETE')
            
                
                <div class="flex gap-2 text-gray-600 hover:scale-110 duration-200 hover:cursor-pointer">
                  <svg class="w-6 stroke-red-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                  <button class="font-semibold text-sm text-red-700">Delete</button>
                </div>
          
        </form>
                          
        </div>
      @endif
    </div>
  </div> 
</a>
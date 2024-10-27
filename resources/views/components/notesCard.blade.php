
<a href="/note/{{ $note->id }} ">
  <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-80 transition hover:scale-105 font-robotoMono">
    @if ($note->cover)
    <div class="relative h-56 m-2.5 overflow-hidden text-white rounded-md">
     
      <img src="{{ asset('storage/' .$note->cover) }}" />
      
    </div>
    @endif
    <div class="p-4">
      <div class="flex flex-row justify-end gap-4">
        
        <div class="mb-4 rounded-full {{$note->visibility=="public" ? "bg-blue-400":"bg-red-400" }} py-0.5 px-2.5 border border-transparent text-xs text-white transition-all shadow-sm w-20 text-center">
          {{ $note->visibility }}
          
        </div>
          @if (Auth::user() && Auth::user()->Bookmarks->contains('note_id',$note->id))
              @php
                
                $bookmark = Auth::user()->bookmarks()
                      ->where('note_id', $note->id)
                      ->where('user_id', Auth::user()->id)
                      ->first();
            @endphp
            <form action="/delete-bookmark/{{ $bookmark->id }}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M18.5 2h-12C4.57 2 3 3.57 3 5.5V22l7-3.5 7 3.5v-9h5V5.5C22 3.57 20.43 2 18.5 2zm1.5 9h-3V5.5c0-.827.673-1.5 1.5-1.5s1.5.673 1.5 1.5V11z"></path></svg>
                </button>
              </form>
  
              @else
              <form action="/bookmark/{{ $note->id }}" method="post">
                @csrf
                <button type="submit">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                    <path d="M18.5 2h-12C4.57 2 3 3.57 3 5.5V22l7-3.5 7 3.5v-9h5V5.5C22 3.57 20.43 2 18.5 2zM15 18.764l-5-2.5-5 2.5V5.5C5 4.673 5.673 4 6.5 4h8.852A3.451 3.451 0 0 0 15 5.5v13.264zM20 11h-3V5.5c0-.827.673-1.5 1.5-1.5s1.5.673 1.5 1.5V11z">
                      </path></svg>
                </button>
              </form>
            @endif
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
          
        </div>
      </div>
      @if ($user->name === $note->user->name)
        <div class="flex flex-row justify-center gap-2 items-center py-3 ">
          
          

          <p><a href="/edit-note/{{$note->id}}" class="EditBtn">
              <div class="flex flex-col justify-center items-center gap-2 text-slate-600 hover:scale-110 duration-200 hover:cursor-pointer">
              <svg class="w-6 stroke-green-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
              </svg>
              <button class="font-semibold text-sm text-green-700 pt-2">Edit</button>
          </div>
          </a></p>
          
            
                <a href="/show-delete-note/{{ $note->id }}">
                  <div class="flex flex-col gap-2 text-gray-600 hover:scale-110 duration-200 hover:cursor-pointer">
                    <svg class="w-6 stroke-red-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                    <button class="font-semibold text-sm text-red-700">Delete</button>
                  </div>
                </a>
        
                          
        </div>
      @endif
    </div>
  </div> 
</a>
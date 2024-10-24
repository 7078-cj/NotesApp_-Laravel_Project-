<a href="/note/{{ $bookmark->note->id }}">
    <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-80 transition hover:scale-105">
      @if ($bookmark->note->cover)
      <div class="relative h-56 m-2.5 overflow-hidden text-white rounded-md">
       
        <img src="{{ asset('storage/' .$bookmark->note->cover) }}" />
        
      </div>
      @endif
      <div class="p-4">
        <div class="flex flex-row justify-end gap-4">
            <div class="mb-4 rounded-full {{$bookmark->note->visibility=="public" ? "bg-blue-400":"bg-red-400" }} py-0.5 px-2.5 border border-transparent text-xs text-white transition-all shadow-sm w-20 text-center">
            {{ $bookmark->note->visibility }}
            </div>

            @if (Auth::user() && Auth::user()->Bookmarks->contains('note_id',$bookmark->note->id))
                <form action="/delete-bookmark/{{ $bookmark->id }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M18.5 2h-12C4.57 2 3 3.57 3 5.5V22l7-3.5 7 3.5v-9h5V5.5C22 3.57 20.43 2 18.5 2zm1.5 9h-3V5.5c0-.827.673-1.5 1.5-1.5s1.5.673 1.5 1.5V11z"></path></svg>
                    </button>
                </form>

                @else
                <form action="/bookmark/{{ $bookmark->note->id }}" method="post">
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
          {{$bookmark->note->title}}
        </h6>
        <p class="text-slate-600 leading-normal font-light">
          {{$bookmark->note->description}}
        </p>
      </div>
   
      <div class="flex items-center justify-between p-4">
        <div class="flex items-center">
          @if ($bookmark->note->user->avatar)
          <img
           
            src="{{ asset('storage/' .$bookmark->note->user->avatar) }}"
            class="relative inline-block h-8 w-8 rounded-full"
          />
          @endif
          <div class="flex flex-col ml-3 text-sm">
            <span class="text-slate-800 font-semibold">{{ $bookmark->note->user->name }}</span>
            <span class="text-slate-600">
              {{ $bookmark->note->created_at }}
            </span>
          </div>
        </div>
       
      </div>
    </div> 
  </a>
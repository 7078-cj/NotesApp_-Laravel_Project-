<article class="max-w-[500px] overflow-hidden rounded-lg m-10  ">
               
              
    <div class="bg-white p-10 sm:p-6 font-robotoMono">
      <div class="flex flex-row justify-center gap-5 items-center">
        <h4 class="flex flex-row gap-1 items-center">
          @if ($user->avatar)
            <img src="{{ asset('storage/' .$body->user->avatar) }}" alt="" class="h-20 rounded-full p-4">
        @endif
        {{ $body->user->name }}</h4>
        <time  class="block text-xs text-gray-500"> Created at: {{ $body->created_at }} </time>
      </div>
      
  
      
        <div class="mt-0.5 text-lg text-gray-900  gap-3 m-5 flex flex-col"> 
            @if ($body->image)
                {{-- <div>
                <img
                alt=""
                src="{{ asset('storage/' . $body->image) }}"
                class="  {{$body->image ?
                    'w-full h-80  rounded-lg mb-4':"hidden"}}">  
                </div> --}}
                @php
                $fileExtension = pathinfo($body->image, PATHINFO_EXTENSION);
                @endphp
            
    
            {{-- Check if the uploaded file is a video --}}
            @if(in_array($fileExtension, ['mp4', 'avi', 'mov']))
                <video width="600" controls class="{{$body->image ?
                    'w-full h-90  rounded-lg mb-4':"hidden"}}">
                    <source src="{{ asset('storage/' . $body->image) }}" type="video/{{ $fileExtension }}">
                    Your browser does not support the video tag.
                </video>
            @else
                {{-- If it's not a video, display it as an image --}}
                <img src="{{ asset('storage/' . $body->image) }}" alt="Uploaded Image" width="300" class="{{$body->image ?
                    'w-full h-80  rounded-lg mb-4':"hidden"}}">
            @endif
            
            @endif
            <p class=" text-gray-600 m-1 break-words text-center">{{ $body->message }} </p>
        
        </div>
        {{-- footer --}}
        <div class="">
            
              @if ($user->name === $body->user->name || $user->name === $body->note->user->name )
                    <div >
                        

                    <div class="flex flex-row justify-center gap-2 items-center py-3">

                            <p><a href="/update-body/{{ $body->id }}" class="EditBtn">
                                <div class="flex gap-2 text-gray-600 hover:scale-110 duration-200 hover:cursor-pointer">
                                <svg class="w-6 stroke-green-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                  <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                </svg>
                                <button class="font-semibold text-sm text-green-700">Edit</button>
                    </div>
                        </a></p>
                        
                        <form action="/delete-body/{{$body->id}}" method="POST">
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
        </div>
      
    </div>
  </article>

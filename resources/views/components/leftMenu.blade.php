

    {{-- <aside class="flex flex-col  h-screen rounded-md mx-3 p-6 gap-40 items-center ">
        <div class="noteTo">Create Notes:</div>
        <div class="flex gap-2 flex-col">
          <h2>Create New Note</h2>
          <form action="/create-note" method="POST" class="flex flex-col gap-3 border p-3 bg-slate-200 border-orange-500 items-center">
              @csrf
              <label for="title">Title:</label>
              <input type="text" name="title" placeholder="Title" class="input">
              <label for="description">Description:</label>
              <input type="text" name="description" placeholder="description" class="input">
              <label for="visibility">Visibility:</label>
              <select name="visibility" id="" class="input">
                  <option value="public">Public</option>
                  <option value="private">Private</option>
              </select>
              
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
            

              
          </form>
        </div>
        

      </aside> --}}

      <div class="flex flex-col items-center justify-center max-h-full p-5 ">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
          <h2 class="text-2xl font-bold text-gray-800 mb-4">Create New Note:</h2>
      
          <form class="flex flex-col" action="/create-note" method="POST">
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
      </div>
   

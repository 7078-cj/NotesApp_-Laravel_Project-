

    <aside class="flex flex-col  h-screen rounded-md mx-3 p-6 gap-40 items-center ">
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
        

      </aside>
   



    <aside class="flex flex-col  h-screen rounded-md gap-40 items-center justify-center bg-slate-100">
       
         <div class="flex flex-col flex-wrap items-center justify-center max-h-full p-2 ">
        <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6 max-h-full">
          <h2 class="text-2xl font-bold text-gray-800 mb-4">Create New Note:</h2>
      
          <form class="flex flex-col max-h-full" action="/create-note" method="POST" enctype="multipart/form-data">
            @csrf
            <input  name="title" placeholder="Title" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" type="text">
            
            <select name="visibility" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" id="product">
              <option value="public">Public</option>
                  <option value="private">Private</option>
            </select>
            <label for="cover">Notes cover photo:</label>
            <input id="picture" type="file"  name="cover" class="flex h-10 w-full rounded-md border border-input bg-white px-3 py-2 text-sm text-gray-400 file:border-0 file:bg-transparent file:text-gray-600 file:text-sm file:font-medium">
            
            <textarea placeholder="Desctiption" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="description"></textarea>
      
            <button class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150" type="submit">Submit</button>
          </form>
        </div>
      </div>
   
        

      </aside>

     

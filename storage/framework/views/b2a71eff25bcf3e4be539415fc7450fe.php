<div class="flex flex-col flex-wrap items-center justify-center max-h-full p-2 font-robotoMono">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6 max-h-full animate-slide-in-bottom">
      <h2 class="text-2xl font-bold text-gray-800 mb-4">Create New Note:</h2>

      <form class="flex flex-col max-h-full" action="/create-note" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input
          name="title"
          placeholder="Title"
          class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
          type="text">
        
        <select
          name="visibility"
          class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
          id="product">
          <option value="public">Public</option>
          <option value="private">Private</option>
        </select>

        <label for="cover">Notes cover photo:</label>
        <input
          id="picture"
          type="file"
          name="cover"
          class="flex h-10 w-full rounded-md border border-input bg-white px-3 py-2 text-sm text-gray-400 file:border-0 file:bg-transparent file:text-gray-600 file:text-sm file:font-medium">
          
          <br>
          
          <label for="Description">Description:</label>
        <textarea
          placeholder="Description"
          class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
          name="description"></textarea>
          
          <label for="message">Note's 1st message:</label>
          <textarea id="comment" name="message" class="w-full text-sm text-gray-900 bg-white border-0 dark:bg-slate-200 focus:ring-0  dark:placeholder-slate-400 px-5 py-2.5 text-center" placeholder="Write a content..."  ></textarea>

        <button
          class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150"
          type="submit">
          Submit
        </button>
      </form>
    </div>
  </div><?php /**PATH C:\Users\santo\OneDrive\Desktop\php-laravel\NotesApp - Copy\resources\views/components/createNote.blade.php ENDPATH**/ ?>
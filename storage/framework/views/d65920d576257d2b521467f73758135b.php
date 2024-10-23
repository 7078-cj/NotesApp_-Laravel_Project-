<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  <div class="bg-white border border-4 rounded-lg shadow relative m-10">

    <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
            Edit Note
        </h3>
        
    </div>

    <div class="p-6 space-y-6">
        <form action="/edit-note/<?php echo e($note->id); ?>" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <?php echo method_field('PUT'); ?>
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="title" class="text-sm font-medium text-gray-900 block mb-2">title:</label>
                    <input type="text" name="title"  value="<?php echo e($note->title); ?>" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Apple Imac 27”" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="visibility" class="text-sm font-medium text-gray-900 block mb-2">Category</label>
                    <select name="visibility" id="" value=<?php echo e($note->visibility); ?> class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                      <option value="public">Public</option>
                      <option value="private">Private</option>
                  </select>
                </div>
                <input id="picture" type="file"  name="cover" class="flex h-10 w-full rounded-md border border-input bg-white px-3 py-2 text-sm text-gray-400 file:border-0 file:bg-transparent file:text-gray-600 file:text-sm file:font-medium">
                
                <div class="col-span-full">
                    <label for="description" class="text-sm font-medium text-gray-900 block mb-2">description</label>
                    <textarea  name="description" rows="6"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" placeholder="description"><?php echo e($note->description); ?></textarea>
                </div>
            </div>
            <div class="p-6 border-t border-gray-200 rounded-b">
              <button type="submit" class="text-white bg-slate-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">Save all</button>
          </div>
        </form>
    </div>

     

</div>

<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\santo\OneDrive\Desktop\php-laravel\NotesApp\resources\views/edit-note.blade.php ENDPATH**/ ?>
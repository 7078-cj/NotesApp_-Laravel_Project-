<div class="flex flex-col flex-1 max-w-screem max-h-full">


<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
<div class="flex flex-row flex-1 gap-3 max-h-full bg-gradient-to-b from-indigo-500 to-sky-300">
        
        
        <div class="min-h-screen pt-4">
              <div class="flex flex-row flex-1 gap-11 flex-wrap items-center justify-center  ">
                    
                    <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php echo $__env->make('components.notesCard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
        </div>
        
        
        
              
                    
       
        
    
        
</div>
</div>



<?php echo app('Illuminate\Foundation\Vite')('resources/js/menu.js'); ?>


    



<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\santo\OneDrive\Desktop\php-laravel\NotesApp\resources\views/communityNotes.blade.php ENDPATH**/ ?>
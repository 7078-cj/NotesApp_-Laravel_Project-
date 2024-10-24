<div class="flex flex-col flex-1 max-w-screem max-h-full">


<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
<div class="flex flex-row flex-1 gap-3 max-h-full bg-gradient-to-b from-indigo-500 to-sky-300">
        <div class="hidden  md:inline-block lg:inline-block xl:inline-block ">
            <?php echo $__env->make('components.leftMenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        
        <div class="min-h-screen pt-4">
              <div class="flex flex-row flex-1 gap-11 flex-wrap items-center justify-center  ">
                    
                    <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php echo $__env->make('components.notesCard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
        </div>
        <div class="flex flex-row fixed items-center justify-center align-top gap-2  -bottom-10 -right z-10 mb-12 ">
          <div class=" bg-gradient-to-b from-indigo-200 to-sky-300 ring-1 m-4 p-15 rounded-full
              md:hidden lg:hidden">

          
            <button
            id="addNew"
            class="group cursor-pointer outline-none active:rotate-90 duration-300"
              >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="50px"
              height="50px"
              viewBox="0 0 24 24"
              class="stroke-slate-500 fill-none "
              >
              <path
                d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z"
                stroke-width="1.5"
              ></path>
              <path d="M8 12H16" stroke-width="1.5"></path>
              <path d="M12 16V8" stroke-width="1.5"></path>
            </svg>
          </button>
        </div>

          <div id="createNote" class="hidden  md:hidden lg:hidden xl:hidden ">
            <?php echo $__env->make("components.createNote", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>

          
        </div>
        
        
              
                    
       
        
    
        
</div>
</div>



<?php echo app('Illuminate\Foundation\Vite')('resources/js/menu.js'); ?>


    



<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\santo\OneDrive\Desktop\php-laravel\NotesApp\resources\views/Home.blade.php ENDPATH**/ ?>
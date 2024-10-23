
<div class="note-card">
    <div class="header">
        <span class="visibility"><?php echo e($publicnote->visibility); ?></span>
        <div>
            <?php if($user->name === $publicnote->user->name): ?>
                <p><a href="/edit-note/<?php echo e($publicnote->id); ?>">Edit</a></p>
                <form action="/delete-note/<?php echo e($publicnote->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button>Delete</button>
            <?php endif; ?>
        </div>
        
        
    </div>

    <div class="content">
        
       
        <h3 class="title"><a href="/note/<?php echo e($publicnote->id); ?>"><?php echo e($publicnote->title); ?></a></h3>
        <p class="description">
            <?php echo e($publicnote->description); ?>

        </p>
    </div>

    <div class="footer">
         <p class="date">Created At:  <?php echo e($publicnote->created_at); ?></p>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\santo\OneDrive\Desktop\php-laravel\NotesApp\resources\views/components/publicNoteCard.blade.php ENDPATH**/ ?>
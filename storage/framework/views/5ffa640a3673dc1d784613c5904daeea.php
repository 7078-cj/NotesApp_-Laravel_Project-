<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="" style="border: 3px solid black;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            <?php echo csrf_field(); ?>
            <input type="text" placeholder="name" name="name">
            <input type="text" placeholder="email" name="email">
            <input type="password" placeholder="password" name="password">
            <button>Register</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\Users\santo\OneDrive\Desktop\php-laravel\NotesApp\resources\views/Register.blade.php ENDPATH**/ ?>
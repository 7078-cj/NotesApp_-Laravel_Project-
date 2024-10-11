<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="" style="border: 3px solid black;">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input type="text" placeholder="name" name="login_name">
            <input type="password" placeholder="password" name="login_password">
            <button>Login</button>
        </form>
        <a href="/register-user">Register</a>
    </div>
</body>
</html>

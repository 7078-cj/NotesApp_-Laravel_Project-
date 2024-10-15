<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="background-color:gray; padding: 10px; margin: 10px;">
        <h3><a href=""></a>{{$note->title}} by {{$note->user->name}} email:{{$note->user->email}}</h3>
        <h2>{{$note->description}}</h2>
        <h1>{{$note->body}}</h1>
        <p><a href="/edit-note/{{$note->id}}">Edit</a></p>
        <form action="/delete-note/{{$note->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    </div>
    <div>
        @if ($bodies)
            @foreach ($bodies as $body )
            <img src="{{ asset('storage/' . $body->image) }}" alt="">
            
            <h1>{{ $body->message }}</h1>
            <hr>
            @endforeach
        @endif
       
    </div>
    <div>
        <form action="/create-body/{{ $note->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" placeholder="input image" name="image">
            <input type="text " placeholder="input note" name="message">
            <input type="submit">
        </form>
    </div>
</body>
</html>
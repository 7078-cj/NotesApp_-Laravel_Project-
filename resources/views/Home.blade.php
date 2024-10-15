<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class=""style="border: 3px solid black;">
        <h2>All Notes</h2>
        @foreach ($notes as $note )

        <div style="background-color:gray; padding: 10px; margin: 10px;">
            <h3><a href="/note/{{ $note->id }}">{{$note->title}}</a> by {{$note->user->name}} email:{{$note->user->email}}</h3>
            <h2>{{$note->description}}</h2>
            <p><a href="/edit-note/{{$note->id}}">Edit</a></p>
            <form action="/delete-note/{{$note->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </div>
        @endforeach
    
        <div class="" style="border: 3px solid black;">
        <h2>Create New Notes</h2>
        <form action="/create-note" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Title">
            <input type="text" name="description" placeholder="description">
            <button>Create note</button>
        </form>
    </div>
    <form action="/logout" method="POST">
        @csrf
        <button>logout</button>
    </form>
</body>
</html>


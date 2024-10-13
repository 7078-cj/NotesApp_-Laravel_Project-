<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class=""style="border: 3px solid black;">
<h1>Edit Notes</h1>
  <form action="/edit-note/{{$note->id}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{$note->title}}">
    <input type="text" name="description" placeholder="description" value="{{$note->description}}">
    <textarea name="body">{{$note->body}}</textarea>
    <button>Save Changes</button>
  </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <h1>Edit Post!</h1>
    <form method="POST" action="{{ route('posts.update', $post->id)}}">
       @csrf
       @method('PUT')
        <label>Title: </label>
        <input type="text" name="title" value="{{ old('title', $post->title)}}" >
         <label>Body</label>
         <textarea name="body">{{ old('body', $post->body)}}</textarea>
         <button type="submit" onclick="return confirm('Are you sure you want to update this post?')">Update</button>
    </form>
    <!--use for handling error in the form-->
   @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
         <li>{{$error}}</li>        
        @endforeach
    </ul>
   @endif
</body>
</html>
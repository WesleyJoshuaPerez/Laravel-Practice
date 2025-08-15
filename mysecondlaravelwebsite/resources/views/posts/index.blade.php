<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All posts!</h1>
    <!--use to link the controller that created in PostController.php-->
    <a href="{{ route('posts.create')}}">Create New Post</a> <!--use to use the method inside the postController-->
    
    <!--Main page of the crud app-->
    <!--use to loop in blade file-->
    @foreach ($posts as $post)
    <div>
    <h2>{{ $post->title}}</h2>
     <p>{{$post->body}}</p>
     <a href="{{route('posts.edit', $post->id)}}">Edit</a>
     <form action="{{route('posts.destroy', $post->id)}}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE') <!--USE TO CREATE A METHOD-->
        <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>

     </form>
    </div>
    @endforeach
</body>
</html>
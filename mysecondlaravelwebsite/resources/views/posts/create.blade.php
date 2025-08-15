<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
   <h1>Create Post!</h1>
   <form action="{{ route('posts.store')}}" method="POST"> <!--use to use the method inside the postController-->
     @csrf
     <label>Title:</label>
     <input type="text" name="title"value="{{ old('title')}}">
       <label>Body:</label>
     <textarea name="body">{{ old('body')}}</textarea> 
      <button type="submit">Save</button>
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
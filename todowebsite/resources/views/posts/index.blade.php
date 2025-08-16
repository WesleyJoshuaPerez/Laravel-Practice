  @extends('layout.default')
  @section('content')
<div class="container py-4">
<div class="d-flex align-items-center justify-content-between mb-4 raise-up">
  <h1>Todo List</h1>
  <a href="{{ url('posts/create') }}" class="btn btn-primary">Add Todo</a>
</div>
@foreach ( $posts as $post )
 {{-- Example static list --}}
  <div class="list-group raise-up">
    <div class="list-group-item d-flex justify-content-between align-items-center">
      <div>
        <h5 class="mb-1">{{ $post->Title}}</h5>
        <p class="mb-1">{{ $post->context}}</p>
        <small class="text-muted">Created on: {{ $post->created_at->format('M d, Y')}}</small>
      </div>
      <div>
   <a class="btn btn-sm btn-outline-secondary me-2"  href="{{route('posts.edit', $post->id)}}">Edit</a>
     <form action="{{route('posts.destroy', $post->id)}}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE') <!--USE TO CREATE A METHOD-->
        <button class="btn btn-sm btn-outline-danger" type="submit" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>

     </form>
  
    </div>
    </div>
    </div>
@endforeach
</div>
@endsection

 

 @extends('layout.default')
  @section('content')
   <div class="d-flex flex-column justify-content-center align-items-center mt-5 raise-up" style="height: 50vh;">
     <form class="form-container" action="{{route('posts.store')}}" method="POST"> 
    @csrf
    <div class="form">
        <h1 class="mb-3 fs-1 text-center">Create Todo</h1>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="Title" id="Title" placeholder="Enter title" value="{{old('Title')}}">
        </div>

        <div class="form-group">
            <label for="context">Context:</label>
            <textarea name="context" id="context" placeholder="Enter content">{{old('context')}}</textarea>
        </div>

       <div class="d-flex justify-content-center gap-3">
  <button type="submit" class="form-submit-btn">Create</button>
  <a href="{{ url('posts') }}" class="form-submit-btn">View Todos</a>
</div>
    </div>
</form>  
   <!--use for handling error in the form-->
   @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
         <li>{{$error}}</li>        
        @endforeach
    </ul>
   @endif
</div>     
@endsection
 
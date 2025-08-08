 @extends('layouts.default')


 <!--use to connect layout view like header to be able to reuse the layout-->
 @section('header')
  <h2>This is the header!</h2>

 @endsection

 @section('maincontent')
  <h1>Home</h1>
   <a href="{{ url("/contact")}}">Go to contact</a>
    {{-- <!--use to access routes without a named parameters-->
    <a href="{{ url("/test")}}">Go to test</a> </br>
    --}}

    {{-- <!--use to access named routes parameters the path of routes located in routes folter/web.php-->
    <a href="{{ route("testpage")}}">Go to test page</a> </br>
    <a href="{{ route("contactpage")}}">Go to contact page</a> --}}

    <!--use for form route-->
    <form action="{{ route('Formlaravel')}}" method="post">
      @csrf
    <label for="fullname">Fullname: </label> <br>
     <input type="text" name="fullname" id="fullname" required> <br>
     <label for="email">Email: </label> <br>
      <input type="email" name="email" id="email" required> <br>
        <button type="submit">Submit</button>
    </form>
 @endsection

 @section('footer')
      <h2>this is the footer</h2>
 @endsection
 
 
 
</body>
</html>
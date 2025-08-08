 @extends('layouts.default')


 <!--use to connect layout view like header to be able to reuse the layout-->
 @section('header')
  <h2>This is the Contact page!</h2>
 @endsection

 @section('maincontent')
  <h1>Contanct page</h1>
      <a href="{{ url("/")}}">Go to Main Page</a> </br>
    <a href="#">email</a>
 @endsection

 @section('footer')
      <h2>this is the footer</h2>
 @endsection
 
 
 
</body>
</html>
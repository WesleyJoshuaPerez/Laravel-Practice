<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!--use to link css or js to test server and live server it is like link element-->
    @vite('resources/css/app.css')
     @vite('resources/js/app.js')
</head>
<body>
    <h1>Home</h1>
    {{-- <!--use to access routes without a named parameters-->
    <a href="{{ url("/test")}}">Go to test</a> </br>
    <a href="{{ url("/contact")}}">Go to contact</a> --}}

    <!--use to access named routes parameters the path of routes located in routes folter/web.php-->
    <a href="{{ route("testpage")}}">Go to test page</a> </br>
    <a href="{{ route("contactpage")}}">Go to contact page</a>


</body>
</html>
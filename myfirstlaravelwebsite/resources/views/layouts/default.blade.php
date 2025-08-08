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

    <!--use to recycle the use of layout-->
    <header>
      @yield('header')
      @include('sidemenu')
    </header>

    <main>
     @yield('maincontent')
    </main>

    <footer>
     @yield('footer')
    </footer>
</body>
</html>
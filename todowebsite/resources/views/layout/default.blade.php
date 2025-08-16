<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo Website Application</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  @vite('resources/css/main.css')
<link rel="icon" type="image/png" href="images/todologo.png">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light custom-navbar sticky-top ">
  <div class="container">
    <a class="navbar-brand fw-bold fs-5" href="{{ url('/') }}"><img src="{{asset('images/todologo.png')}}" alt="" style="width:40px; height:auto;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('posts') ? 'active' : '' }}" href="{{ url('posts') }}">Todo's</a>
        </li>
        <li class="nav-item">
         <a class="nav-link {{ request()->is('posts/create') ? 'active' : '' }}" href="{{ url('posts/create') }}">Create</a> 
        </li>
      </ul>
    </div>
  </div>
</nav>

    @yield('content')
</body>
</html>

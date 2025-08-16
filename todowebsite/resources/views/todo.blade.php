 @extends('layout.default')
   @section('content')
<div class="d-flex flex-column justify-content-center align-items-center mt-5 raise-up" style="height: 50vh;">
  <h1 class="mb-3 fs-1 brush-font">Todo Website</h1>
   <a href="{{ url('posts/create') }}" class="btn btn-primary ">Get Started</a>
</div>
<div class="container my-5">
  <div class="row g-4 justify-content-center">
    
   <!-- Feature 1 -->
<div class="col-md-4 raise-up">
  <div class="card feature-card text-center p-3">
    <div class="img mb-3">
      <img src="{{ asset('images/fast.png') }}" alt="Fast Performance" class="img-fluid" style="width:80px; height:auto;">
    </div>
    <span class="fs-5 fw-bold">Fast Performance</span>
    <p class="info">Optimized for speed and reliability.</p>
    <div class="share">
      <a href="#"><i class="bi bi-lightning-charge-fill"></i></a>
    </div>
    <button class="btn btn-light mt-3">Learn More</button>
  </div>
</div>

<!-- Feature 2 -->
<div class="col-md-4 raise-up">
  <div class="card feature-card text-center p-3">
    <div class="img mb-3">
      <img src="{{ asset('images/secure.png') }}" alt="Secure" class="img-fluid" style="width:80px; height:auto;">
    </div>
    <span class="fs-5 fw-bold">Secure</span>
    <p class="info">Built with strong security features.</p>
    <div class="share">
      <a href="#"><i class="bi bi-shield-lock-fill"></i></a>
    </div>
    <button class="btn btn-light mt-3">Learn More</button>
  </div>
</div>

<!-- Feature 3 -->
<div class="col-md-4 raise-up">
  <div class="card feature-card text-center p-3">
    <div class="img mb-3">
      <img src="{{ asset('images/design.png') }}" alt="Modern Design" class="img-fluid" style="width:80px; height:auto;">
    </div>
    <span class="fs-5 fw-bold">Modern Design</span>
    <p class="info">Beautiful and user-friendly interface.</p>
    <div class="share">
      <a href="#"><i class="bi bi-palette-fill"></i></a>
    </div>
    <button class="btn btn-light mt-3">Learn More</button>
  </div>
</div>


  </div>
</div>
@endsection

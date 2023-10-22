@extends('layouts.masterPage')


@section('title')
    Team page
@endsection
  

{{-- ------------------------------------ Nav ------------------------------------ --}}

@section('nav')

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <img id="logo" src="{{ asset('assets/img/logo.png') }}" alt="logo">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>      
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link " href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Team</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>

@endsection

{{-- ------------------------------------ Nav ------------------------------------ --}}

  <!-- -------------------content------------------- --> 

  @section('content')
      
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 intro  text-center">
          <h3>Team</h3>
          <h1>Meet Our Crew Members</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eveniet debitis aliquam necessitatibus</p>
        </div>
      </div>
     
      <div class="row text-center">
        <div class="col-lg-4 col-md-6">
            <div class="team-member">
            
            <img src="{{ asset('assets/img/barber 1.webp') }}" alt="barber 1">
                <div class="social-links">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                </div>
                <h5 class="mt-4">Wade Warren</h5>
                <small>Hair Cutter</small>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="team-member">
            <img src="{{ asset('assets/img/barber2.webp') }}" alt="barber2">

                <div class="social-links">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                </div>
                <h5 class="mt-4">Wade Warren</h5>
                <small>Hair Cutter</small>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="team-member">
              <img src="{{ asset('assets/img/barber 4.jpg') }}" alt="barber2">
                <div class="social-links">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                </div>
                <h5 class="mt-4">Wade Warren</h5>
                <small>Hair Cutter</small>
            </div>
        </div>
      </div>


      
    </div>
  </section>

  @endsection


  <!-- -------------------content------------------- --> 

</body>
</html>
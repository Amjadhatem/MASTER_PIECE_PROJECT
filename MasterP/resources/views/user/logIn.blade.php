@extends('layouts.masterPage')

@section('title')
    Sign Up 
@endsection


<!-- -------------------NAVBAR------------------- -->

@section('nav')
    
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a href="/" id="a_back">Back</a>
        
    </div>
  </nav>

  @endsection

  <!-- -------------------/NAVBAR------------------- -->

  <section id="reg">

 <!-- -------------------content------------------- -->

 @section('content')
     
  <div class="cont">

  <div class="contact-form-container">
    <div class="signup_sec">
      <h1>Log In <i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i></h1> 
    <img id="logo" src="{{ asset('assets/img/logo.png') }}" alt="logo"> 

    </div>
      <br>
      <form id="contactForm">
    
          <div class="input-group">
              <input type="email" name="email" class="form-input" required placeholder="Email">
          </div>

          <div class="input-group">
              <input type="password" name="password" class="form-input" required placeholder="Password">
          </div>    

          <br>
          
          <div class="Register">
          <button type="submit" class="submit-button">Log In </button>
          <a href="/SignUp"><h5 id="h5_test">registration</h5></a>
        </div>
          
        
      </form>
  </div>

  <div class="test4"></div>
 
</div>

@endsection
 
<!-- -------------------/content------------------- -->

@extends('layouts.masterPage')

@section('title')
    Log In 
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

    <div class="test3"></div>
  
    <div class="contact-form-container">
      <div class="signup_sec">
        <h1>Sign Up <i class="fa-solid fa-right-to-bracket" style="color: #ffffff;"></i></h1> 
    <img id="logo" src="{{ asset('assets/img/logo.png') }}" alt="logo"> 
      </div>
        <br>
        <form id="contactForm">
            <div class="input-group">
                <input type="text" name="name" class="form-input" required placeholder="First Name">
            </div>
  
            <div class="input-group">
                <input type="text" name="name" class="form-input" required placeholder="Last Name">
            </div>
  
            <div class="input-group">
                <input type="email" name="email" class="form-input" required placeholder="Email">
            </div>
            
            <div class="input-group">
                <input type="password" name="password" class="form-input" required placeholder="Password">
            </div>
  
            <div class="input-group">
                <input type="tel" name="phone" class="form-input" placeholder="Phone">
            </div>
  
            <div class="test8">
            <button type="submit" class="submit-button">Sign Up </button>
            <a href="/Login"><h5 id="h5_test">I Have Already Accouunt</h5></a>
          </div>
        </form>
    </div>
   
  
  </div>
   

@endsection
 
<!-- -------------------/content------------------- -->

</body>

<script src="https://kit.fontawesome.com/abdaddd2d7.js" crossorigin="anonymous"></script>

</html>
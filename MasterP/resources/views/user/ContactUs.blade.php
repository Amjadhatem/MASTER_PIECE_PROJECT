@extends('layouts.masterPage')

@section('title')
    Contact Us 
@endsection

 <!-- -------------------NAVBAR------------------- -->

 @section('nav')
     
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    
    <div class="container">
        <img id="logo" src="{{ asset('assets/img/logo.png') }}" alt="logo"> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">

         
          <li class="nav-item">
            <i class="bi bi-arrow-left"></i><a href="/" id="a_back">Back</a>

          </li>

        </ul>
      </div>
    </div>
  </nav>

  @endsection

  <!-- -------------------/NAVBAR------------------- -->

  
  <!-- -------------------Contact Us------------------- -->
  
  @section('content')
  
<section id="contact">
    <div class="cont">
    <div class="contact-form-container">
        <h1 id="h1">Contact Us <i class="fa-solid fa-address-book" style="color: #fffafa;"></i></h1> 
        <br>
        <form id="contactForm">
            <div class="input-group">
                
                <input type="text" id="name" name="name" class="form-input" required placeholder="Name">
            </div>

            <div class="input-group">
                <input type="email" id="email" name="email" class="form-input" required placeholder="Email">
            </div>

            <div class="input-group">
                <input type="tel" id="phone" name="phone" class="form-input" placeholder="Phone">
            </div>

            <div class="input-group">
                <textarea id="message" name="message" class="form-textarea" required placeholder="Message"></textarea>
            </div>

            <button type="submit" class="submit-button">Send Message </button>
        </form>
    </div>

    <div class="test"></div>
   
 
</div>
   

  </section>

  @endsection

  <!-- -------------------/CONTACT------------------- -->

  <!-- -------------------Contact Us------------------- -->

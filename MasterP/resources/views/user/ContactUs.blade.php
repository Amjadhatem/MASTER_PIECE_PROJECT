<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <style>
    body{
      /* border: 2px solid white; */
      height: 40rem;
      /* background-image: url('{{ asset('assets/img/dd.jpg') }}'); */
      background: linear-gradient(to right,#1B1F34 ,rgba(27 , 31 , 52 , 0.0)) ,url('{{ asset('assets/img/conta.jpg') }}');
      background-position: center;
      background-size: cover;
      
    }
  </style>
</head>
<body>
  <!-- -------------------Contact Us------------------- -->
<a href="/homepage" id="a_back"><img src="{{ asset('assets/img/logo.png') }}" style="width: 4.9rem "  alt=""></a> 
  
<div id="contact">
  <div class="cont">
  <div class="contact-form-container">
      <h1 id="h1">Contact Us <i class="fa-solid fa-address-book" style="color: #fffafa;"></i></h1> 
      <br>
      <form action="{{ route('con.store') }}" method="POST" id="contactForm" enctype="multipart/form-data">
        @csrf
          <div class="input-group">
              
              <input type="text" id="name" name="name" class="form-input" placeholder="Name">
          </div>

          <div class="input-group">
              <input type="email" id="email" name="email" class="form-input" placeholder="Email">
          </div>

          <div class="input-group">
              <input type="text" id="phone" name="phoneNumber" class="form-input" placeholder="Phone">
          </div>

          <div class="input-group">
              <textarea id="message" name="message" class="form-textarea" placeholder="Message"></textarea>
          </div>

          <button type="submit" class="submit-button">Send Message </button>
      </form>
  </div>

 

</div>
 

</div>



<!-- -------------------/CONTACT------------------- -->
</body>
</html>
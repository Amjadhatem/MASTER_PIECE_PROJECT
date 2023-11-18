<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <title>Login Page</title>
  <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/png">


  <style>
    body{
      /* border: 2px solid white; */
      height: 40rem;
      /* background-image: url('{{ asset('assets/img/dd.jpg') }}'); */
      background: linear-gradient(to right,#1B1F34 ,rgba(27 , 31 , 52 , 0.0)) ,url('{{ asset('assets/img/dd.jpg') }}');
      background-position: center;
      background-size: cover;
      
    }
  </style>
</head>
<body>
     
  {{-- <header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a href="/" id="a_back">Back</a>
        
    </div>
  </nav>

</header> --}}
<a href="/" id="a_back"><img src="{{ asset('assets/img/logo.png') }}" style="width: 4.9rem "  alt=""></a> 

  <div class="cont">

  <div class="contact-form-container">
    <div class="signup_sec">
      <h1 style="margin: 0 auto">Log In</h1> 

    </div>
      <br>
      <form action="{{ route('login.action') }}" method="POST" id="contactForm">
        @csrf
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
          </div>
        @endif

          <div class="input-group">
              <input type="email" name="email" class="form-input" aria-describedby="emailHelp" placeholder="Enter Email Address...">
          </div>

          <div class="input-group">
              <input type="password" name="password" class="form-input" placeholder="Password">
          </div>   

          <div class="input-group">
            <div class="custom-control custom-checkbox small">
              <input name="remember" type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                          Me</label>  
            </div>    
          </div>    

          <br>
          
          <div class="Register">
          <button type="submit" class="submit-button">Login </button>
          <a href="{{ route('register') }}"><h5 id="h5_test">Create an Account!</h5></a>
        </div>
          
        
      </form>
  </div>

  <div class="test4"></div>
 
</div>
</body>
</html>


 
<!-- -------------------/content------------------- -->

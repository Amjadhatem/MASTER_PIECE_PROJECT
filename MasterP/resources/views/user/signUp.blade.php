<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

  <title>Signup Page</title>
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
  
<a href="/" id="a_back"><img src="{{ asset('assets/img/logo.png') }}" style="width: 4.9rem "  alt="logo"></a>


  <div class="test3"></div>
  
    <div class="contact-form-container">
      <div class="signup_sec">
        <h1 style="margin: 0 auto">Sign up</h1> 
      </div>
        <br>
        <form action="{{ route('register.save') }}" method="POST" id="contactForm" >
          @csrf

          <div class="input-group">
            <input type="text" name="name" class="form-input @error('name')is-invalid @enderror" placeholder="Name">
            @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
        </div>

            <div class="input-group">
                <input type="email" name="email" class="form-input @error('email')is-invalid @enderror" placeholder="Email Address">
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror 
            </div>
            
            <div class="input-group">
                <input type="password" name="password" class="form-input @error('password')is-invalid @enderror" placeholder="Password">
                @error('password')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
            </div>
            
            <div class="input-group">
                <input type="password" name="password_confirmation" class="form-input @error('password_confirmation')is-invalid @enderror" placeholder="Repeat Password">
                @error('password_confirmation')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
            </div>
  
            <div class="input-group">
                <input type="text" name="phoneNumber" class="form-input @error('phoneNumber')is-invalid @enderror" placeholder="Phone Number">
                @error('phoneNumber')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
            </div>
  
            <div class="test8">
            <button type="submit" class="submit-button">Sign Up </button>
            <a href="{{ route('login') }}"><h5 id="h5_test">Already have an account? Login!</h5></a>
          </div>
        </form>
    </div>
   
  
  </div>
   

</body>
</html><div class="cont">

    
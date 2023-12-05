<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/png">


  @include('layouts.head')
  
</head>

<body id="home" data-bs-spy="scroll" data-bs-target=".navbar">

  <!-- -------------------NAVBAR------------------- -->

  @yield('nav')

  <!-- -------------------/NAVBAR------------------- -->


  <!-- -------------------Content------------------- -->
  
  @yield('content')

  <!-- -------------------/Content------------------- -->


  <!-- ---------------------Footer--------------------- -->

  <footer>
    @include('layouts.footer')
  </footer>

  <!-- ---------------------/Footer--------------------- -->


</body>


  <!-- ---------------------Script--------------------- -->

  @include('layouts.footer-script')

  <!-- ---------------------/Script--------------------- -->


</html>
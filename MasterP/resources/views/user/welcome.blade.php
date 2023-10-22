@extends('layouts.masterPage')

@section('title')
    Home page
@endsection

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
          <a class="nav-link active" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#features">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Team">Team</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="#reviews">Reviews</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href="#Blog">Blog</a>
        </li>

      </ul>
      <a href="/Login" class="btn btn-outline-brand ms-lg-4">Log in</a>
      <a href="/SignUp" class="btn btn-outline-brand ms-lg-4">Sign up</a>
    </div>
  </div>
</nav>


@endsection

@section('content')
    
<!-- ---------------------Fsection--------------------- -->

<section id="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="display-3">Let your hair do the talking </h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eveniet debitis aliquam necessitatibus</p>
          <a href="#booking" class="btn btn-brand">Book Now</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ---------------------/Fsection--------------------- -->



  <!-- ---------------------About--------------------- -->

  <section id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <img src="{{ asset('assets/img/About.png') }}" alt="About">
        </div>
        <div class="col-lg-4 offset-lg-1">
          <h3>About Us</h3>
          <h1>About Amjad Salon</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eveniet debitis aliquam necessitatibus</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eveniet debitis aliquam necessitatibus</p>
          <img class="signature" src="./img/signature.png" alt="">

        </div>
      </div>
    </div>
  </section>

  <!-- ---------------------/About--------------------- -->



  <!-- ---------------------Services--------------------- -->

  <section id="services">
    <div class="container text-center">
      <div class="row">
        <div class="col-12 intro">
          <h3>Services</h3>
          <h1>What We Provide?</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eveniet debitis aliquam necessitatibus</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">

          <div class="service">
            <img src="{{ asset('assets/img/service_1.jpg') }}" alt="Service 1">
            <div class="content">

              <h3 class="h5">Haircuts</h3>
              <p>Our expert stylists can give you the perfect haircut to suit your style.</p>
              <a href="#" class="link-more">Know More <i class="bi bi-arrow-right"></i> </a>
              <div class="hidden-content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur itaque vel, voluptate illo sapiente expedita ipsam ut repellat quod animi, optio enim ullam tenetur corrupti aliquam maiores earum tempore magnam!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">

          <div class="service">
            <img src="{{ asset('assets/img/service_2.jpg') }}" alt="Service 2">
            <div class="content">

              <h3 class="h5">Shaves</h3>
              <p> Experience a traditional hot towel shave for a smooth and refreshing shave.</p>
              <a href="#" class="link-more">Know More <i class="bi bi-arrow-right"></i> </a>
              <div class="hidden-content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur itaque vel, voluptate illo sapiente expedita ipsam ut repellat quod animi, optio enim ullam tenetur corrupti aliquam maiores earum tempore magnam!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">

          <div class="service">
            <img src="{{ asset('assets/img/service_3.jpg') }}" alt="Service 3">
            <div class="content">

              <h3 class="h5">Hairstyling</h3>
              <p>Get the perfect hairstyle for any occasion, from elegant updos to casual beachy waves.
              </p>
              <a href="#" class="link-more">Know More <i class="bi bi-arrow-right"></i> </a>
              <div class="hidden-content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur itaque vel, voluptate illo sapiente expedita ipsam ut repellat quod animi, optio enim ullam tenetur corrupti aliquam maiores earum tempore magnam!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cta-btns">
        <a href="#booking" class="btn btn-brand me-sm-2">Appointment</a>
        <a href="/ContactUs" class="btn btn-outline-brand ms-sm-2">Get In Touch</a>

      </div>
    </div>
  </section>

  <!-- ---------------------/Services--------------------- -->



  <!-- ---------------------Features--------------------- -->
  
  <section id="features">
    <div class="container">
      <div class="row">
        <div class="col-12 intro  text-center">
          <h3>Features</h3>
          <h1>Why We Are Awesome</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eveniet debitis aliquam necessitatibus</p>
        </div>
      </div>
      <div class="row gy-5">
        <div class="col-lg-4 col-sm-6">
          <div class="feature">
            <div class="icon-feature"><i class="bi bi-vector-pen"></i></div>
          <div>
          <h3 class="h5">Service Title</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eveniet debitis aliquam necessitatibus</p>
          <a href="#" class="link-more">Know More <i class="bi bi-arrow-right"></i></a>
          <div class="hidden-content">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis dignissimos architecto totam. Sint eum quae placeat ullam assumenda. Natus quas maxime ipsum consequuntur, quod inventore a ad facere? Rerum, facere?</p>
          </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="feature">
          <div class="icon-feature"><i class="bi bi-fire"></i></div>
        <div>
        <h3 class="h5">Service Title</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eveniet debitis aliquam necessitatibus</p>
        <a href="#" class="link-more">Know More <i class="bi bi-arrow-right"></i></a>
        <div class="hidden-content">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur itaque vel, voluptate illo sapiente expedita ipsam ut repellat quod animi, optio enim ullam tenetur corrupti aliquam maiores earum tempore magnam!</p>
        </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6">
      <div class="feature">
        <div class="icon-feature"><i class="bi bi-people-fill"></i></div>
      <div>
      <h3 class="h5">Service Title</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eveniet debitis aliquam necessitatibus</p>
      <a href="#" class="link-more">Know More <i class="bi bi-arrow-right"></i></a>
      <div class="hidden-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores ut hic placeat earum voluptatum dolores voluptate culpa, eius aliquid libero aperiam laborum repellat? Esse delectus officiis maxime explicabo suscipit excepturi!</p>
      </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6">
    <div class="feature">
      <div class="icon-feature"><i class="bi bi-heart-fill"></i></div>
    <div>
    <h3 class="h5">Service Title</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eveniet debitis aliquam necessitatibus</p>
    <a href="#" class="link-more">Know More <i class="bi bi-arrow-right"></i></a>
    <div class="hidden-content">
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae nihil voluptatibus itaque asperiores nesciunt, aspernatur, pariatur ex ipsum reprehenderit veniam molestias suscipit natus excepturi rerum assumenda quam neque, vitae amet.</p>
    </div>
    </div>
  </div>
</div>
<div class="col-lg-4 col-sm-6">
  <div class="feature">
    <div class="icon-feature"><i class="bi bi-wifi"></i></div>
  <div>
  <h3 class="h5">Service Title</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eveniet debitis aliquam necessitatibus</p>
  <a href="#" class="link-more">Know More <i class="bi bi-arrow-right"></i></a>
  <div class="hidden-content">
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum non ex laboriosam laborum maxime odit quaerat nobis, totam mollitia culpa similique aut! Corrupti doloribus praesentium quos nobis illo esse delectus.</p>
  </div>
  </div>
</div>
</div>
<div class="col-lg-4 col-sm-6">
  <div class="feature">
    <div class="icon-feature"><i class="bi bi-headphones"></i></div>
  <div>
  <h3 class="h5">Service Title</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eveniet debitis aliquam necessitatibus</p>
  <a href="#" class="link-more">Know More <i class="bi bi-arrow-right"></i></a>
  <div class="hidden-content">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis unde a ab excepturi illo blanditiis fuga accusamus, qui non dolorem, saepe ullam, repellat minima vitae eaque earum! Aperiam, autem!</p>
  </div>
  </div>
</div>
</div>
    </div>
     
    </div>
  </section>

  <!-- ---------------------/Features--------------------- -->



  <!-- ----------------------Reviews--------------------- -->
{{-- 
  <section id="reviews">
    <div class="container">
      <div class="row">
        <div class="col-12 intro text-center">
          <h6>Reviews</h6>
          <h1>Listen to our customers</h1>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered 
            alteration in some form, by injected humour, or randomised word which
          </p>
        </div>
      </div>

      
      <div class="row gy-4" >
        <div class="col-lg-4 col-md-6">
           <div class="review">
               <div class="d-flex">
               <img src="{{ asset('assets/img/user icon.png') }}" alt="User Icon">
               <div class="ms-3">
               <h5>User name</h5>
               <small>@Usermail</small>
          </div>
            <div class="icon"><i class="bi bi-twitter"></i></div>
            </div>
            <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nisi voluptatem qui aliquam, sit sequi numquam recusandae accusantium distinctio repellat possimus incidunt in, at asperiores culpa saepe hic blanditiis quisquam!</p>
      </div>
    </div>
        <div class="col-lg-4 col-md-6">
           <div class="review">
               <div class="d-flex">
                <img src="{{ asset('assets/img/user icon.png') }}" alt="User Icon">
               <div class="ms-3">
               <h5>User name</h5>
               <small>@Usermail</small>
          </div>
            <div class="icon"><i class="bi bi-twitter"></i></div>
            </div>
            <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nisi voluptatem qui aliquam, sit sequi numquam recusandae accusantium distinctio repellat possimus incidunt in, at asperiores culpa saepe hic blanditiis quisquam!</p>
      </div>
    </div>
        <div class="col-lg-4 col-md-6">
           <div class="review">
               <div class="d-flex">
                <img src="{{ asset('assets/img/user icon.png') }}" alt="User Icon">
               <div class="ms-3">
               <h5>User name</h5>
               <small>@Usermail</small>
          </div>
            <div class="icon"><i class="bi bi-twitter"></i></div>
            </div>
            <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nisi voluptatem qui aliquam, sit sequi numquam recusandae accusantium distinctio repellat possimus incidunt in, at asperiores culpa saepe hic blanditiis quisquam!</p>
      </div>
    </div>
        <div class="col-lg-4 col-md-6">
           <div class="review">
               <div class="d-flex">
                <img src="{{ asset('assets/img/user icon.png') }}" alt="User Icon">
               <div class="ms-3">
               <h5>User name</h5>
               <small>@Usermail</small>
          </div>
            <div class="icon"><i class="bi bi-twitter"></i></div>
            </div>
            <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nisi voluptatem qui aliquam, sit sequi numquam recusandae accusantium distinctio repellat possimus incidunt in, at asperiores culpa saepe hic blanditiis quisquam!</p>
      </div>
    </div>
        <div class="col-lg-4 col-md-6">
           <div class="review">
               <div class="d-flex">
                <img src="{{ asset('assets/img/user icon.png') }}" alt="User Icon">
               <div class="ms-3">
               <h5>User name</h5>
               <small>@Usermail</small>
          </div>
            <div class="icon"><i class="bi bi-twitter"></i></div>
            </div>
            <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nisi voluptatem qui aliquam, sit sequi numquam recusandae accusantium distinctio repellat possimus incidunt in, at asperiores culpa saepe hic blanditiis quisquam!</p>
      </div>
    </div>
        <div class="col-lg-4 col-md-6">
           <div class="review">
               <div class="d-flex">
                <img src="{{ asset('assets/img/user icon.png') }}" alt="User Icon">
               <div class="ms-3">
               <h5>User name</h5>
               <small>@Usermail</small>
          </div>
            <div class="icon"><i class="bi bi-twitter"></i></div>
            </div>
            <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nisi voluptatem qui aliquam, sit sequi numquam recusandae accusantium distinctio repellat possimus incidunt in, at asperiores culpa saepe hic blanditiis quisquam!</p>
      </div>
    </div>
    </div>
  </section>
   --}}
  <!-- ---------------------/Reviews--------------------- -->



  <!-- ---------------------Blog--------------------- -->

  <section id="Blog">
    <div class="container">
      <div class="row">
        <div class="col-12 intro text-center">
          <h6>Blog</h6>
          <h1>Latest from the blog</h1>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered 
            alteration in some form, by injected humour, or randomised word which
          </p>
        </div>
      </div>

      <div class="row">
         <div class="col-lg-6 col-md-6">
          <article class="blog-post">

            <img id="bloge1" src="{{ asset('assets/img/blog1.jpg') }}" alt="">
            <div class="date">
              <div>
                  <div class="day">12</div>
                  <div class="year">sep, 2023</div>
              </div>
            </div>
            <h4 class="mt-5">2026 Men's hair terends everywhere</h4>
            <p class="my-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi deleniti omnis reiciendis sapiente enim temporibus nesciunt placeat, quae hic perferendis! Voluptatem error eos asperiores voluptate hic dolores molestias quia non!</p>
            <a href="#" class="link-more">Know More <i class="bi bi-arrow-right"></i></a>
          <div class="hidden-content">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis dignissimos architecto totam. Sint eum quae placeat ullam assumenda. Natus quas maxime ipsum consequuntur, quod inventore a ad facere? Rerum, facere?</p>
          </div>

          </article>
         </div>

         <div class="col-lg-6 col-md-6">
          <article class="blog-post">

            <img src="{{ asset('assets/img/blog2.jpg') }}" alt="">
            <div class="date">
              <div>
                  <div class="day">12</div>
                  <div class="year">sep, 2023</div>
              </div>
            </div>
            <h4 class="mt-5">2026 Men's hair terends everywhere</h4>
            <p class="my-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi deleniti omnis reiciendis sapiente enim temporibus nesciunt placeat, quae hic perferendis! Voluptatem error eos asperiores voluptate hic dolores molestias quia non!</p>
            <a href="#" class="link-more">Know More <i class="bi bi-arrow-right"></i></a>
          <div class="hidden-content">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis dignissimos architecto totam. Sint eum quae placeat ullam assumenda. Natus quas maxime ipsum consequuntur, quod inventore a ad facere? Rerum, facere?</p>
          </div>

          </article>
         </div>
      </div>
  </section>

  <!-- ---------------------/Blog--------------------- -->



  <!-- ---------------------Booking--------------------- -->

  <section id="booking">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <form action="#" class="row">
            <div class="col-12 mb-4">
            <h1>Book Appointment</h1>
            <p>There are many variations of passages of lorem ipsum available , but the majority have suffered alteration in some from, by injected humour , or randomised words which</p>
            </div>
            <div class="form-froup col-12">
              <input type="text" class="form-control" placeholder="Full Name">
            </div>
            <div class="form-froup col-12">
              <input type="text" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-froup col-12">
              <input type="text" class="form-control" placeholder="Phone Number">
            </div>
            <div class="form-froup col-12">
              <!-- <input type="datetime" class="form-control" placeholder="DD/MM/YYY"> -->
              <input type="date" id="datePicker" class="form-control" placeholder="DD/MM/YYY">
            </div>
            <div class="form-group col-6">
              <input type="time" id="appointmentTime" class="form-control" placeholder="Time">
            </div>
            <div class="form-group col-12">
              <select id="barberSelect" class="form-control" placeholder="Select Barber">
                <option value="" disabled selected>Select Barber</option>
                <option value="barber1">Barber 1</option>
                <option value="barber2">Barber 2</option>
                <option value="barber3">Barber 3</option>
                <!-- Add more barber options as needed -->
              </select>
            </div>
            
            <div class="form-froup col-12">
              <TExtarea name="" class="form-control" id="" cols="30" rows="5" placeholder="Message"></textarea>
            </div>
            <div class="form-group col-12 mt-4">
              <button type="submit" class="btn btn-brand">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- ---------------------Booking--------------------- -->

@endsection




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
          <a class="nav-link" href="#Team">Team</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="#reviews">Reviews</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href="#Blog">Blog</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="#Blog"><i class="fa-solid fa-user" style="color: #ebe6e8;"></i></a>
        </li> --}}

      </ul>
      {{-- <a href="/" class="btn btn-outline-brand ms-lg-4">Logout</a> --}}
      {{-- <a href="#" class="btn btn-outline-brand ms-lg-4">Sign up</a> --}}
      {{-- <a href="{{ route('logout') }}" class="btn btn-outline-brand ms-lg-4" onclick="performLogout()">Log out </a> --}}
      <button onclick="performLogout()" class="btn btn-outline-brand ms-lg-4" >Logout</button>


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
          <p>"Welcome to [A.1 BarberShop], where style meets precision. Step into our world of expert barbers, creating personalized looks that redefine your confidence with every cut."</p>
          <a href="{{ route('Rese.appointment') }}" class="btn btn-brand">Book Now</a>
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
          <h1>About A.1 BarberShop</h1>
          <p>"At A.1 BarberShop, we are more than just a barbershop — we're a haven for style and self-expression. With a team of skilled artisans passionate about their craft, we strive to create an inclusive space where every haircut is a masterpiece, and every client leaves feeling confident and refreshed. Discover the artistry, precision, and warmth that define the essence of A.1 BarberShop."</p>
          <img class="signature" src="{{ asset('assets/img/signature.png') }}" alt="AboutUs">

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

        @foreach ($service as $ser)

        <div class="col-lg-4 col-md-6">

          <div class="service">
            <img src="{{ asset('storage/' . $ser->image_path) }}" alt="Service 1">
            <div class="content">
              <h3 class="h5">{{ $ser->service_name }}</h3>
              <p>{{ $ser->service_bio }}</p>
              
              <a href="#" class="link-more">Know More <i class="bi bi-arrow-right"></i> </a>
              <div class="hidden-content">
               <p>{{ $ser->service_description }}</p>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
      <div class="cta-btns">
        <a href="{{ route('Rese.appointment') }}" class="btn btn-brand me-sm-2">Appointment</a>
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
          <p>Our website not only simplifies the booking process but also enhances your overall salon experience. To give you a sneak peek into the magic we offer</p>
        </div>
      </div>
      <div class="row gy-5">
        <div class="col-lg-4 col-sm-6">
          <div class="feature">
            <div class="icon-feature"><i class="fa-solid fa-globe" style="color: #cae30d;"></i></div>
          <div>
          <h3 class="h5">Online Reservation</h3>
          <p>Empower clients with the convenience of our user-friendly online reservation system. Booking appointments is a breeze as customers navigate through a seamless interface, allowing them to select preferred dates, times,
          </p>
          <a href="#" class="link-more">Know More <i class="bi bi-arrow-right"></i></a>
          <div class="hidden-content">
            <p>Step into the future of convenience with our seamless online reservation system. Booking your next appointment has never been easier. Navigate through our user-friendly platform to select your preferred date, time, and specific services tailored to your unique needs. Say goodbye to waiting on hold or adjusting your schedule to fit salon hours—take control of your time and style effortlessly, all at the click of a button. Welcome to a world where booking beauty is as simple as a few clicks.</p>
          </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="feature">
          <div class="icon-feature"><i class="fa-solid fa-wifi" style="color: #cae30d;"></i></div>
        <div>
        <h3 class="h5">Wi-Fi Service</h3>
        <p>Elevate the salon experience by providing complimentary Wi-Fi access. Clients can stay connected to their virtual world, whether catching up on work, socializing online, or simply enjoying entertainment during their visit.
        </p>
        <a href="#" class="link-more">Know More <i class="bi bi-arrow-right"></i></a>
        <div class="hidden-content">
          <p>Immerse yourself in the ultimate blend of style and connectivity with our complimentary Wi-Fi service. As you step into our salon, stay seamlessly connected to your virtual world. Whether you're catching up on work, sharing your fresh look on social media, or simply enjoying online entertainment, our high-speed Wi-Fi ensures you're always connected. We believe that every moment in the chair should be as enjoyable and connected as you want it to be. Welcome to a space where staying in the loop is as much a part of the experience as your stylish new look.
          </p>
        </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6">
      <div class="feature">
        <div class="icon-feature"><i class="fa-solid fa-broom style="color: #cae30d;"></i></div>
      <div>
      <h3 class="h5">High-Level Cleanliness</h3>
      <p>Experience the pinnacle of cleanliness and hygiene in our salon. Our commitment to maintaining a spotless environment ensures that clients feel not only pampered but also secure in the knowledge that their well-being is our top priority.
      </p>
      <a href="#" class="link-more">Know More <i class="bi bi-arrow-right"></i></a>
      <div class="hidden-content">
        <p>Immerse yourself in an environment where cleanliness is not just a standard but a commitment to your well-being. Our salon takes pride in maintaining a high-level of cleanliness, ensuring that every corner radiates freshness and hygiene. Our rigorous cleaning standards go beyond expectations to create a sanctuary of purity. From sterilized tools to pristine workspaces, we prioritize your safety and comfort. Rest assured that your journey in our salon is not only a transformation of style but also a retreat into a space where cleanliness is paramount. Welcome to a haven where every detail is polished, and every visit assures you of a sparkling, immaculate experience.
  </p>
      </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6">
    <div class="feature">
      <div class="icon-feature"><i class="fa-solid fa-mug-saucer" style="color: #cae30d;"></i></div>
    <div>
    <h3 class="h5">Café Services</h3>
    <p>Transform the salon into a haven of hospitality with our in-house café services. Clients are welcomed to indulge in a complimentary beverage, enhancing their overall relaxation and comfort while enjoying the ambiance of our salon.
    </p>
    <a href="#" class="link-more">Know More <i class="bi bi-arrow-right"></i></a>
    <div class="hidden-content">
      <p>Savor the essence of indulgence as you embark on a sensory journey with our exclusive café services. Nestled within our salon, our café is a haven for relaxation and delight. Immerse yourself in the rich aroma of freshly brewed beverages as you sip on complimentary drinks, curated to complement your salon experience. Our café is more than a corner for refreshments; it's a retreat where you can unwind, socialize, and enhance your overall sense of well-being. Step into a realm where the artistry of styling meets the artistry of flavor, creating a truly bespoke experience for each client. Welcome to a world where every sip is as memorable as every strand of your new hairstyle.
   </p>
    </div>
    </div>
  </div>
</div>
<div class="col-lg-4 col-sm-6">
  <div class="feature">
    <div class="icon-feature"><i class="fa-solid fa-tv" style="color: #cae30d;"></i></div>
  <div>
  <h3 class="h5"> Entertainment Options</h3>
  <p>Immerse clients in a delightful experience with our entertainment options. Whether it's catching up on the latest shows or enjoying a movie, our facilities ensure that clients are engaged and entertained throughout their visit.
  </p>
  <a href="#" class="link-more">Know More <i class="bi bi-arrow-right"></i></a>
  <div class="hidden-content">
    <p>Elevate your salon experience with our curated entertainment options, designed to turn your visit into a delightful escape. While you await your transformation or indulge in one of our services, immerse yourself in a world of visual delight. Our salon offers television and movie-watching facilities, allowing you to catch up on the latest shows or enjoy a cinematic experience. From the latest trends in hairstyling to the most captivating storylines on screen, we ensure that every moment in our salon is as entertaining as it is stylish. Welcome to a space where relaxation and style seamlessly converge, creating an experience that caters to both your visual and aesthetic senses.
  </p>
  </div>
  </div>
</div>
</div>
<div class="col-lg-4 col-sm-6">
  <div class="feature">
    <div class="icon-feature"><i class="fa-solid fa-user-tie" style="color:#cae30d;"></i></div>
  <div>
  <h3 class="h5">Professional Barber Team</h3>
  <p>Entrust your style to our highly skilled and professional barber team. Our experts bring a wealth of experience and expertise to each client, ensuring precision, creativity, and satisfaction with every haircut and styling session.
  </p>
  <a href="#" class="link-more">Know More <i class="bi bi-arrow-right"></i></a>
  <div class="hidden-content">
    <p>Entrust your style evolution to the expertise of our dedicated and highly skilled professional barber team. Our artisans of style bring not only a wealth of experience but also an unwavering commitment to craftsmanship. Each member of our team is a maestro in the art of hair care, blending creativity with precision to sculpt hairstyles that reflect your unique personality. From classic cuts to avant-garde designs, our barbers are not just stylists; they are architects of confidence and trendsetters in the world of fashion. Step into the chair with the assurance that you are in the capable hands of professionals who understand the language of your hair. Welcome to a salon where every snip is a stroke of artistry, and every visit is an experience tailored just for you.
</p>
  </div>
  </div>
</div>
</div>
    </div>
     
    </div>
  </section>

  <!-- ---------------------/Features--------------------- -->

 <!-- ---------------------Team--------------------- -->

 <section id="Team">
  <div class="container">
    <div class="row">
      <div class="col-12 intro  text-center">
        <h3>Team</h3>
        <h1>Meet Our Crew Members</h1>
        <p>"our skilled barbers blend creativity with precision, delivering personalized grooming experiences tailored to each client's style. Step into our welcoming space, where passion and expertise meet to redefine your look with every visit."</p>
      </div>
    </div>
   
    <div class="row text-center">

      @foreach($barber as $bar)

      <div class="col-lg-4 col-md-6">
          <div class="team-member">
          
          <img src="{{ asset('storage/' . $bar->image_path) }}" alt="barber 1">
              <div class="social-links">
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-twitter"></i></a>
              </div>
              <h5 class="mt-4">{{ $bar->barber_name }}</h5>
              <small>{{ $bar->barber_bio }}</small>
          </div>
      </div>
      
      @endforeach

    </div>
  </div>
</section>

<!-- ---------------------/Team--------------------- -->




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

      @foreach($Blog as $blog)

       <div class="col-lg-6 col-md-6">
        <article class="blog-post">

          <img id="bloge1" src="{{ asset('storage/' . $blog->image_path) }}" alt="">
          <div class="date">
            <div>
              <div class="day">{{ \Carbon\Carbon::parse($blog->blog_date)->format('d') }}</div>
              <div class="year">{{ \Carbon\Carbon::parse($blog->blog_date)->format('M, Y') }}</div>  
    
            </div>
          </div>
          <h4 class="mt-5">{{ $blog->blog_title }}</h4>
          <p class="my-3">{{ $blog->blog_content }}</p>
          <a href="#" class="link-more">Know More <i class="bi bi-arrow-right"></i> </a>
          <div class="hidden-content">
            <p>{{ $blog->complete_content }}</p>
        </div>
        </article>
       </div>
       @endforeach
       </div>
    </div>
</section>

<!-- ---------------------/Blog--------------------- -->




  <!-- ---------------------Booking--------------------- -->

  {{-- <section id="booking">
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
  </section> --}}

  <!-- ---------------------Booking--------------------- -->

@endsection




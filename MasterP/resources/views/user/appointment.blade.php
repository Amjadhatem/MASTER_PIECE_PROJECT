@extends('layouts.masterPage')


@section('title')
    Team page
@endsection
  

{{-- ------------------------------------ Nav ------------------------------------ --}}

<header>
  <a href="/homepage" id="a_back"><img src="{{ asset('assets/img/logo.png') }}" style="width: 4.9rem "  alt=""></a> 

</header>

{{-- ------------------------------------ Nav ------------------------------------ --}}

  <!-- -------------------content------------------- --> 

  @section('content')

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
              <select id="barberSelect" class="form-control" placeholder="Select service">
                <option value="" disabled selected>Select Barber</option>
                <option value="barber1">service 1</option>
                <option value="barber2">service 2</option>
                <option value="barber3">service 3</option>
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


  <!-- -------------------content------------------- --> 

</body>
</html>

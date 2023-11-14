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
          @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                <li>{{ $errorMessage }}</li>
                            </ul>
                        </div>
                    @endif
          <form action="{{ route('reservations.store') }}" method="post" class="row">
            @csrf
            <div class="col-12 mb-4">
            <h1>Book Appointment</h1>
            <p>There are many variations of passages of lorem ipsum available , but the majority have suffered alteration in some from, by injected humour , or randomised words which</p>
            </div>
            <div class="form-froup col-12">
              <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-froup col-12">
              <input type="text" name="phone_number" class="form-control" placeholder="phone number">
            </div>
            <div class="form-group col-12">
              <input type="date" name="date" id="datePicker" class="form-control" placeholder="DD/MM/YYYY" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" max="{{ Carbon\Carbon::now()->addDays(7)->format('Y-m-d') }}">
            </div>
            <div class="form-group col-6">
              <select name="time" id="appointmentHour" class="form-control">
                  @for ($i = 1; $i <= 12; $i++)
                      @php $time = $i; $formattedTime = $i.' AM'; @endphp
                      @if (!in_array($time, $reservedTimes))
                          <option value="{{ $time }}">{{ $formattedTime }}</option>
                      @endif
                  @endfor
          
                  @for ($i = 1; $i <= 12; $i++)
                      @php $time = $i + 12; $formattedTime = $i.' PM'; @endphp
                      @if (!in_array($time, $reservedTimes))
                          <option value="{{ $time }}">{{ $formattedTime }}</option>
                      @endif
                  @endfor
              </select>
          </div>
            <div class="form-group col-12">
              <select name="barber_id" id="barberSelect" class="form-control" placeholder="barber_id">
                <option disabled selected>Select Barber</option>
                @foreach($barber as $barber)
                    <option value="{{ $barber->id }}">{{ $barber->barber_name }}</option>
                @endforeach
              </select>
            </div>
            
            <div class="form-froup col-12">
              <TExtarea name="additional_information" class="form-control" id="" cols="30" rows="5" placeholder="additional information"></textarea>
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

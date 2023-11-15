@extends('include.app')
  
@section('title', 'Show Reservation')
  
@section('contents')
    <h1 class="mb-0">Detail Reservation</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">User Name</label>
            <input type="text" name="name" class="form-control" placeholder="UserName" value="{{ $reservation->name }}" readonly>
        </div>        
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" value="{{ $reservation->phone_number }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">date</label>
            <input type="date" name="date" class="form-control" placeholder="Date" value="{{ $reservation->date }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Time</label>
            <input type="text" name="time" class="form-control" placeholder="Time" value="{{ $reservation->time }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Barber Id</label>
            <input type="barber_id" name="barber_id" class="form-control" placeholder="Barber_id" value="{{ $reservation->barber_id }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Additional Information</label>
            <input type="additional_information" name="additional_information" class="form-control" placeholder="additional_information" value="{{ $reservation->additional_information }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $reservation->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $reservation->updated_at }}" readonly>
        </div>
    </div>
@endsection
@extends('include.app')
  
@section('title', 'Edit Service')
  
@section('contents')
    <h1 class="mb-0">Edit Service</h1>
    <hr />
    <form action="{{ route('Rese.update', $reservation->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">User name</label>
                <input type="text" name="name" class="form-control" placeholder="UserName" value="{{ $reservation->name }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone_number" class="form-control" placeholder="phone_number" value="{{ $reservation->phone_number }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">date</label>
                <input type="text" name="date" class="form-control" placeholder="date" value="{{ $reservation->date }}" >

            </div>
            <div class="col mb-3">
                <label class="form-label">Time</label>
                <input type="text" name="time" class="form-control" placeholder="Time" value="{{ $reservation->time }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Barber Id</label>
                <input type="text" name="barber_id" class="form-control" placeholder="Barber Id" value="{{ $reservation->barber_id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Additional Information</label>
                <input type="text" name="additional_information" class="form-control" placeholder="Additional Information" value="{{ $reservation->additional_information }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
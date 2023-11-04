@extends('include.app')
  
@section('title', 'Show Barbers')
  
@section('contents')
    <h1 class="mb-0">Detail Barbers</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">barber name</label>
            <input type="text" name="barber_name" class="form-control" placeholder="barber name" value="{{ $barber->barber_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Image</label>
            <img src="{{ asset('storage/' . $barber->image_path) }}" alt="barber Image" style="max-width: 100px; max-height: 100px;">                               

        </div>
        
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">phone Number</label>
            <input type="text" name="phoneNumber" class="form-control" placeholder="phone Number" value="{{ $barber->phoneNumber }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="barber_bio" placeholder="barber bio" readonly>{{ $barber->barber_bio }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $barber->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $barber->updated_at }}" readonly>
        </div>
    </div>
@endsection
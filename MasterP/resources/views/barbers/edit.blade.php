@extends('include.app')
  
@section('title', 'Edit Barber')
  
@section('contents')
    <h1 class="mb-0">Edit Barber</h1>
    <hr />
    <form action="{{ route('Barbers.update', $barber->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Barber name</label>
                <input type="text" name="barber_name" class="form-control" placeholder="Barber name" value="{{ $barber->barber_name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Image</label>
                <input type="file" name="image_path" class="form-control" >
                @if ($barber->image_path)
                    <img src="{{ asset('storage/' . $barber->image_path) }}" alt="Blog Image" class="img-thumbnail" width="200">
                @else
                    <p>No image uploaded</p>
                @endif
            </div>
            {{-- <div class="col">
                <label for="image_path">Choose an image file (if you want to update the image)</label>
                <input type="file" class="form-control" name="image_path" id="image">
            </div> --}}
            
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">phone Number</label>
                <input type="text" name="phoneNumber" class="form-control" placeholder="phone Number" value="{{ $barber->phoneNumber }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">barber bio</label>
                <textarea class="form-control" name="barber_bio" placeholder="barber bio" >{{ $barber->barber_bio }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
@extends('include.app')
  
@section('title', 'Edit Service')
  
@section('contents')
    <h1 class="mb-0">Edit Service</h1>
    <hr />
    <form action="{{ route('services.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">service_name</label>
                <input type="text" name="service_name" class="form-control" placeholder="service_name" value="{{ $service->service_name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Image</label>
                @if(!empty($service->image_path))
                    <img src="{{ asset($service->image_path) }}" alt="Service Image" style="max-width: 300px; max-height: 200px;">
                @else
                    <p>No image uploaded</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">services_bio</label>
                <input type="text" name="service_bio" class="form-control" placeholder="service_bio" value="{{ $service->service_bio }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="service_description" placeholder="Descriptoin" >{{ $service->service_description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
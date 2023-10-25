@extends('include.app')
  
@section('title', 'Show Service')
  
@section('contents')
    <h1 class="mb-0">Detail Service</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">service_name</label>
            <input type="text" name="service_name" class="form-control" placeholder="service_name" value="{{ $service->service_name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Image</label>
            <img src="{{ asset('storage/' . $service->image_path) }}" alt="Service Image" style="max-width: 100px; max-height: 100px;">                               

        </div>
        
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">service_bio</label>
            <input type="text" name="service_bio" class="form-control" placeholder="services_bio" value="{{ $service->service_bio }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="service_description" placeholder="Descriptoin" readonly>{{ $service->service_description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $service->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $service->updated_at }}" readonly>
        </div>
    </div>
@endsection
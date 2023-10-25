@extends('include.app')
  
@section('title', 'Create Service')
  
@section('contents')
    <h1 class="mb-0">Add Service</h1>
    <hr />
    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="service_name" class="form-control" placeholder="service_name">
            </div>  
            <div class="col">
                <input type="file" class="form-control" name="image_path" id="image" placeholder="Choose an image file">

            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="service_bio" class="form-control" placeholder="service_bio">
            </div>
            <div class="col">
                <textarea class="form-control" name="service_description" placeholder="Descriptoin"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
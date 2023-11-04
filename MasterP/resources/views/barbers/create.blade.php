@extends('include.app')
  
@section('title', 'Create Barber')
  
@section('contents')
    <h1 class="mb-0">Add barber</h1>
    <hr />
    <form action="{{ route('Barbers.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="barber_name" class="form-control" placeholder="barber name">
            </div>  
            <div class="col">
                <input type="file" class="form-control" name="image_path" id="image" placeholder="Choose an image file">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="phoneNumber" class="form-control" placeholder="phoneNumber">
            </div>
            <div class="col">
                <textarea class="form-control" name="barber_bio" placeholder="barber bio"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
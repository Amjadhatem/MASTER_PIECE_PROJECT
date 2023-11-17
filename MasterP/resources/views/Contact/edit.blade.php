@extends('include.app')
  
@section('title', 'Edit Messages')
  
@section('contents')
    <h1 class="mb-0">Edit Messages</h1>
    <hr />
    <form action="{{ route('con.update', $con->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">User name</label>
                <input type="text" name="name" class="form-control" placeholder="UserName" value="{{ $con->name }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $con->email }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phoneNumber" class="form-control" placeholder="Phone Number" value="{{ $con->phoneNumber }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Message</label>
                <input type="text" name="message" class="form-control" placeholder="message" value="{{ $con->message }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
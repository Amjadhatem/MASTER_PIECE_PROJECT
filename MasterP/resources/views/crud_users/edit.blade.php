@extends('include.app')
  
@section('title', 'Edit Service')
  
@section('contents')
    <h1 class="mb-0">Edit Service</h1>
    <hr />
    <form action="{{ route('user.update', $users->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">User name</label>
                <input type="text" name="name" class="form-control" placeholder="UserName" value="{{ $users->name }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="email" value="{{ $users->email }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Password</label>
                <input type="text" name="password" class="form-control" placeholder="Password" value="{{ $users->password }}" >

            </div>
            <div class="col mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phoneNumber" class="form-control" placeholder="phoneNumber" value="{{ $users->phoneNumber }}" >

            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
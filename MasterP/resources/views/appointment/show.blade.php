@extends('include.app')
  
@section('title', 'Show Service')
  
@section('contents')
    <h1 class="mb-0">Detail Service</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">User Name</label>
            <input type="text" name="name" class="form-control" placeholder="UserName" value="{{ $users->name }}" readonly>
        </div>        
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $users->email }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Password</label>
            <input type="text" name="password" class="form-control" placeholder="password" value="{{ $users->password }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">phoneNumber</label>
            <input type="text" name="phoneNumber" class="form-control" placeholder="phoneNumber" value="{{ $users->phoneNumber }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $users->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $users->updated_at }}" readonly>
        </div>
    </div>
@endsection
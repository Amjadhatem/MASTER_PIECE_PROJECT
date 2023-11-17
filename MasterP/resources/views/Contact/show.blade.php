@extends('include.app')
  
@section('title', 'Show Messages')
  
@section('contents')
    <h1 class="mb-0">Detail Contacts</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">User Name</label>
            <input type="text" name="name" class="form-control" placeholder="UserName" value="{{ $con->name }}" readonly>
        </div>        
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $con->email }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">phoneNumber</label>
            <input type="text" name="phoneNumber" class="form-control" placeholder="Phone Number" value="{{ $con->phoneNumber }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Additional Information</label>
            <input type="text" name="message" class="form-control" placeholder="Message" value="{{ $con->message }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $con->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $con->updated_at }}" readonly>
        </div>
    </div>
@endsection
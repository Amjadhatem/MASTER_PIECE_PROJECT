@extends('include.app')
  
@section('title', 'Home Services')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Services</h1>
        <a href="{{ route('services.create') }}" class="btn btn-primary">Add Service</a>
        {{-- <a href="{{ route('logout') }}" class="btn btn-primary">Log out </a> --}}
        <button onclick="performLogout()" class="btn btn-primary" >Logout</button>


    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="table-responsive" style="overflow-x: scroll;">
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>service_name</th>
                <th>image</th>
                <th>services_bio</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($service->count() > 0)
                @foreach($service as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->service_name }}</td>
                        <td class="align-middle">
                                <img src="{{ asset('storage/' . $rs->image_path) }}" alt="Service Image" style="max-width: 100px; max-height: 100px;">                               
                        </td>
                        <td class="align-middle">{{ $rs->service_bio }}</td>
                        <td class="align-middle">{{ $rs->service_description }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('services.show', $rs->id) }}" type="button" class="btn btn-secondary">Details</a>
                                <a href="{{ route('services.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('services.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Service not found</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
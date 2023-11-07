@extends('include.app')

@section('title', 'Home Team')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Barbers</h1>
       
             <a href="{{ route('Barbers.create') }}" class="btn btn-primary">Add Barber</a>
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
                    <th>barber name</th>
                    <th>image</th>
                    <th>phone Number</th>
                    <th>barber_bio</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($barber->count() > 0)
                    @foreach($barber as $bar)
                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="align-middle">{{ $bar->barber_name }}</td>
                            <td class="align-middle">
                                <img src="{{ asset('storage/' . $bar->image_path) }}" alt="Service Image" style="max-width: 100px; max-height: 100px;">                               
                            </td>
                            <td class="align-middle">{{ $bar->phoneNumber }}</td>
                            <td class="align-middle">{{ $bar->barber_bio }}</td>  
                            <td class="align-middle">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('Barbers.show', $bar->id) }}" type="button" class="btn btn-secondary">Details</a>
                                    <a href="{{ route('Barbers.edit', $bar->id)}}" type="button" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('Barbers.destroy', $bar->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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













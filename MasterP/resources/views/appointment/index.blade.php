@extends('include.app')

@section('title', 'Home Reservation')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Reservation</h1>
       
             {{-- <a href="{{ route('Blogs.create') }}" class="btn btn-primary">Add Blog</a> --}}
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
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Barber Id</th>
                    <th>Additional Information</th>
                </tr>
            </thead>
            <tbody>
                @if($reservation->count() > 0)
                    @foreach($reservation as $re)
                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="align-middle">{{ $re->name }}</td>
                            <td class="align-middle">{{ $re->phone_number }}</td>
                            <td class="align-middle">{{ \Carbon\Carbon::parse($re->date)->format('Y-m-d') }}</td>
                            <td class="align-middle">{{ $re->time }}</td>  
                            <td class="align-middle">{{ $re->barber_id }}</td>  
                            <td class="align-middle">{{ $re->additional_information }}</td>  
                            <td class="align-middle">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('Rese.show', $re->id) }}" type="button" class="btn btn-secondary">Details</a>
                                    <a href="{{ route('Rese.edit', $re->id)}}" type="button" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('Rese.destroy', $re->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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













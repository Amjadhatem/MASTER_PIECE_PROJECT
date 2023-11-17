@extends('include.app')

@section('title', 'Home Messages')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Contacts</h1>
       
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
                    <th>Email</th>
                    <th>phone Number</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @if($con->count() > 0)
                    @foreach($con as $cont)
                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="align-middle">{{ $cont->name }}</td>
                            <td class="align-middle">{{ $cont->email }}</td>
                            <td class="align-middle">{{ $cont->phoneNumber }}</td>  
                            <td class="align-middle">{{ $cont->message }}</td>  
                            <td class="align-middle">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('con.show', $cont->id) }}" type="button" class="btn btn-secondary">Details</a>
                                    <a href="{{ route('con.edit', $cont->id)}}" type="button" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('con.destroy', $cont->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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













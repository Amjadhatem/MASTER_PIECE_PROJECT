@extends('include.app')
  
@section('title', 'Home Services')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Services</h1>
        {{-- <a href="{{ route('services.create') }}" class="btn btn-primary">Add Service</a> --}}
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
                <th>User name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>+

            @php $counter = 0 @endphp
            @foreach($users as $us)
                @if ($us->role === 0 && $us->floor !== 1)
                @php $counter++ @endphp
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $us->name }}</td>
                        <td class="align-middle">{{ $us->email }}</td>
                        <td class="align-middle">{{ $us->password }}</td>                      
                        <td class="align-middle">{{ $us->phoneNumber }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('user.show', $us->id) }}" type="button" class="btn btn-secondary">Details</a>
                                <a href="{{ route('user.edit', $us->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('user.destroy', $us->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
            @endif
                @endforeach
                @if ($counter === 0)
                <tr>
                    <td class="text-center" colspan="5">No eligible users found</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
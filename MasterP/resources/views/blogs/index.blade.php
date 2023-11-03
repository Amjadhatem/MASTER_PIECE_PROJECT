@extends('include.app')

@section('title', 'Home Blogs')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Blogs</h1>
         {{-- <div> --}}
             <a href="{{ route('Blogs.create') }}" class="btn btn-primary">Add Blog</a>
             <a href="{{ route('logout') }}" class="btn btn-primary">Log out </a>
         {{-- </div> --}}
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
                    <th>blog_title</th>
                    <th>image</th>
                    <th>blog_content</th>
                    <th>blog_date</th>
                    <th>complete_content</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($Blog->count() > 0)
                    @foreach($Blog as $item)
                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="align-middle">{{ $item->blog_title }}</td>
                            <td class="align-middle">
                                <img src="{{ asset('storage/' . $item->image_path) }}" alt="Service Image" style="max-width: 100px; max-height: 100px;">                               
                            </td>
                            <td class="align-middle">{{ $item->blog_content }}</td>
                            <td class="align-middle">{{ \Carbon\Carbon::parse($item->blog_date)->format('Y-m-d') }}</td>
                            <td class="align-middle">{{ $item->complete_content }}</td>  
                            <td class="align-middle">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('Blogs.show', $item->id) }}" type="button" class="btn btn-secondary">Details</a>
                                    <a href="{{ route('Blogs.edit', $item->id)}}" type="button" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('Blogs.destroy', $item->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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













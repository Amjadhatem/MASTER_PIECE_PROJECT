@extends('include.app')
  
@section('title', 'Edit Service')
  
@section('contents')
    <h1 class="mb-0">Edit Blog</h1>
    <hr />
    <form action="{{ route('Blogs.update', $Blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Blog title</label>
                <input type="text" name="blog_title" class="form-control" placeholder="blog title" value="{{ $Blog->blog_title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Image</label>
                <input type="file" name="image_path" class="form-control" >
                @if ($Blog->image_path)
                    <img src="{{ asset('storage/' . $Blog->image_path) }}" alt="Blog Image" class="img-thumbnail" width="200">
                @else
                    <p>No image uploaded</p>
                @endif
            </div>
            {{-- <div class="col">
                <label for="image_path">Choose an image file (if you want to update the image)</label>
                <input type="file" class="form-control" name="image_path" id="image">
            </div> --}}
            
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">blog content</label>
                <input type="text" name="blog_content" class="form-control" placeholder="blog content" value="{{ $Blog->blog_content }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">blog date</label>
                <input type="date" name="blog_date" class="form-control" placeholder="blog date" value="{{ $Blog->blog_date }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">complete content</label>
                <textarea class="form-control" name="complete_content" placeholder="complete content" >{{ $Blog->complete_content }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
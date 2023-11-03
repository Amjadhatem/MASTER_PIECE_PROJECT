@extends('include.app')
  
@section('title', 'Create Service')
  
@section('contents')
    <h1 class="mb-0">Add Blogs</h1>
    <hr />
    <form action="{{ route('Blogs.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="blog_title" class="form-control" placeholder="blog title">
            </div>  
            <div class="col">
                <input type="file" class="form-control" name="image_path" id="image" placeholder="Choose an image file">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="blog_content" class="form-control" placeholder="blog content">
            </div>
            <div class="col">
                <input type="date" name="blog_date" class="form-control" placeholder="blog date">
            </div>
            <div class="col">
                <textarea class="form-control" name="complete_content" placeholder="complete content"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
@extends('include.app')
  
@section('title', 'Show Service')
  
@section('contents')
    <h1 class="mb-0">Detail Blog</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">blog_title</label>
            <input type="text" name="blog_title" class="form-control" placeholder="blog title" value="{{ $Blog->blog_title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Image</label>
            <img src="{{ asset('storage/' . $Blog->image_path) }}" alt="Service Image" style="max-width: 200px; max-height: 150px;">                               

        </div>
        
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">blog_content</label>
            <input type="text" name="blog_content" class="form-control" placeholder="blog content" value="{{ $Blog->blog_content }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">blog_date</label>
            <input type="date" name="blog_date" class="form-control" placeholder="blog date" value="{{ $Blog->blog_date }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">complete_content</label>
            <textarea class="form-control" name="complete_content" placeholder="complete content" readonly>{{ $Blog->complete_content }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $Blog->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $Blog->updated_at }}" readonly>
        </div>
    </div>
@endsection
<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Carbon\Carbon;


class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Blog = Blogs::orderBy('created_at', 'DESC')->get();
       
        return view('blogs.index' , compact('Blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $data = $request->validate([
        'blog_title' => 'required',
        'blog_content' => 'required',
        'blog_date' => 'required|date',
        'complete_content' => 'required',
        'image_path' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation rules for image uploads
    ]);

    $imagePath = null; // Initialize the image path variable

    if ($request->hasFile('image_path')) {
        $imagePath = $request->file('image_path')->store('images', 'public');
    }

    $blogDate = Carbon::parse($data['blog_date']); // Create a Carbon instance for the 'blog_date' field

    $blog = Blogs::create([
        'blog_title' => $data['blog_title'],
        'image_path' => $imagePath,
        'blog_content' => $data['blog_content'],
        'blog_date' => $blogDate,
        'complete_content' => $data['complete_content'],
    ]);

    return redirect(route('Blogs'))->with('success', 'Service added successfully');
}


    /**
     * Display the specified resource.
     */
    public function show(string $blogs)
    {
        $Blog = Blogs::findOrFail($blogs);
  
        return view('blogs.show', compact('Blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $blogs)
    {
        $Blog = Blogs::findOrFail($blogs);
  
        return view('blogs.edit', compact('Blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $blogs)
    {
        // $Blog = Blogs::findOrFail($blogs);
        
        
        // $Blog->update($request->all());
  
        // return redirect(route('Blogs'))->with('success', 'service updated successfully');
    
        try {
            $Blog = Blogs::findOrFail($request->id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('Blogs')->with('error', 'Blog not found');
        }
    
        // Handle image upload if a new image is provided
        if ($request->hasFile('image_path')) {
            // dd($request->all());

            $imagePath = $request->file('image_path')->store('images', 'public');
            
            $Blog->image_path = $imagePath;
        }else {
            $imagePath = null;
        }
    
        // Update the other fields, including the 'date' field
        $Blog->blog_title = $request->input('blog_title');
        $Blog->blog_date = $request->input('blog_date');    
        $Blog->blog_content = $request->input('blog_content');
        $Blog->complete_content = $request->input('complete_content');
    
        // Optional: You can add validation for the date here if needed
    
        // Save the changes to the database
        $Blog->update();
    
        return redirect()->route('Blogs')->with('success', 'Blog updated successfully');
    

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $blogs)
    {
        $Blog = Blogs::findOrFail($blogs);
  
        $Blog->delete();
  
        return redirect(route('Blogs'))->with('success', 'service deleted successfully');
    }
}

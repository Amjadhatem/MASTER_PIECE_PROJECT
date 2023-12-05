<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Carbon\Carbon;


class BlogsController extends Controller
{
    
    public function index()
    {

        // Fetch all blogs and order them by creation date in descending order

        $Blog = Blogs::orderBy('created_at', 'DESC')->get();
       
        // Pass the blog data to the 'blogs.index' view

        return view('blogs.index' , compact('Blog'));
    }

   
    public function create()
    {

        // Display the view for creating a new blog

        return view('blogs.create');
    }

    
    public function store(Request $request)
{

    // Validate the incoming data
    $data = $request->validate([
        'blog_title' => 'required',
        'blog_content' => 'required',
        'blog_date' => 'required|date',
        'complete_content' => 'required',
        'image_path' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation rules for image uploads
    ]);

    $imagePath = null; // Initialize the image path variable

    // Handle image upload if an image is provided

    if ($request->hasFile('image_path')) {
        $imagePath = $request->file('image_path')->store('images', 'public');
    }

    $blogDate = Carbon::parse($data['blog_date']); // Create a Carbon instance for the 'blog_date' field

     // Create a new blog entry with the validated data

    $blog = Blogs::create([
        'blog_title' => $data['blog_title'],
        'image_path' => $imagePath,
        'blog_content' => $data['blog_content'],
        'blog_date' => $blogDate,
        'complete_content' => $data['complete_content'],
    ]);

    // Redirect to the 'Blogs' route with a success message

    return redirect(route('Blogs'))->with('success', 'Service added successfully');
}


    public function show(string $blogs)
    {

        // Find and retrieve the specified blog entry

        $Blog = Blogs::findOrFail($blogs);
  
        // Pass the blog data to the 'blogs.show' view

        return view('blogs.show', compact('Blog'));
    }

    
    public function edit(string $blogs)
    {

        // Find and retrieve the specified blog entry

        $Blog = Blogs::findOrFail($blogs);
  
        // Pass the blog data to the 'blogs.edit' view

        return view('blogs.edit', compact('Blog'));
    }

    
    public function update(Request $request, string $blogs)
    {
     
        // Find and retrieve the specified blog entry

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
    
        // Redirect to the 'Blogs' route with a success message

        return redirect()->route('Blogs')->with('success', 'Blog updated successfully');
    

    }

    
    public function destroy(string $blogs)
    {

        // Find and retrieve the specified blog entry

        $Blog = Blogs::findOrFail($blogs);
  
         // Delete the blog entry

        $Blog->delete();
  
        // Redirect to the 'Blogs' route with a success message
        
        return redirect(route('Blogs'))->with('success', 'service deleted successfully');
    }
    
   
}

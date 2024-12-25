<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\frontend\Controller;
use App\Models\frontend\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    // Method to store a new blog post (with image upload)
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
            'tags' => 'nullable|string',
            'post_date' => 'nullable|date',
        ]);

        // Handle image upload if provided
        $path = null;  // Default to null if no image is uploaded

        if ($request->hasFile('image')) {
            // Get the original file name
            $originalFileName = $request->file('image')->getClientOriginalName();
            // Get the file extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Generate a new unique file name to avoid overwriting
            $newFileName = Str::slug(pathinfo($originalFileName, PATHINFO_FILENAME)) . '-' . uniqid() . '.' . $extension;

            // Store the image in the 'public/storage/blogs' folder
            $path = $request->file('image')->storeAs('blogs', $newFileName, 'public'); // 'public' is the disk name
        }

        // Create a new blog post
        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $path ? 'storage/' . $path : null,  // Save the relative path to the image
            'tags' => $request->tags,
            'post_date' => $request->post_date,
        ]);

        // Redirect to the blog index page with a success message
        return redirect()->route('blog.index')->with('success', 'Blog created successfully!');
    }

    // Method to display the list of blogs
    public function blog()
    {
        // Get latest blogs with pagination
        $blogs = Blog::latest()->paginate(5);  // Adjust the number of items per page as needed

        return view('frontend.blog', compact('blogs')); // Pass blogs to the view
    }

    // Method to display a single blog post
    public function show($id)
    {
        // Find the blog by its ID, or fail with a 404 if not found
        $blog = Blog::findOrFail($id);

        // Pass blog data to the view
        return view('frontend.show-blog', compact('blog'));
    }
}

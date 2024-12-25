<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\backend\Controller;
use App\Models\frontend\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminBlogController extends Controller
{
    // Display a listing of the blogs
    public function index()
    {
        // Paginate the blogs with 10 per page
        $blogs = Blog::paginate(10);

        // Return the view for listing blogs
        return view('backend.list-blog', compact('blogs'));
    }

    // Show the form for creating a new blog
    public function create()
    {
        // Return the view for creating a new blog
        return view('backend.add-blog');
    }

    // Store a newly created blog in the database
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
            'tags' => 'nullable|string',
            'post_date' => 'nullable|date',
        ]);

        // Handle the file upload for the image
        $path = $request->file('image') ? $request->file('image')->store('blogs') : null;

        // Create the blog post
        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $path,
            'tags' => $request->tags,
            'post_date' => $request->post_date,
        ]);

        // Redirect back to the blog index with success message
        return redirect()->route('admin.blog.index')->with('success', 'Blog created successfully.');
    }

    // Show the form for editing an existing blog
    public function edit(Blog $blog)
    {
        // Return the view for editing a blog, passing the specific blog
        return view('backend.edit-blog', compact('blog'));
    }

    // Update an existing blog in the database
    public function update(Request $request, Blog $blog)
    {
        // Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
            'tags' => 'nullable|string',
            'post_date' => 'nullable|date',
        ]);

        // Handle the file upload for the image if a new image is uploaded
        if ($request->hasFile('image')) {
            // If there's an existing image, delete it
            if ($blog->image) {
                Storage::delete($blog->image);
            }
            // Store the new image
            $path = $request->file('image')->store('blogs');
        } else {
            // If no new image is uploaded, keep the existing image
            $path = $blog->image;
        }

        // Update the blog post
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $path,
            'tags' => $request->tags,
            'post_date' => $request->post_date,
        ]);

        // Redirect back to the blog index with success message
        return redirect()->route('admin.blog.index')->with('success', 'Blog updated successfully.');
    }

    // Delete a blog from the database
    public function destroy(Blog $blog)
    {
        // Delete the associated image if exists
        if ($blog->image) {
            Storage::delete($blog->image);
        }

        // Delete the blog record
        $blog->delete();

        // Redirect back to the blog index with success message
        return redirect()->route('admin.blog.index')->with('success', 'Blog deleted successfully.');
    }
}

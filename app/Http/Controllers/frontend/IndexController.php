<?php

namespace App\Http\Controllers\frontend;

use App\Models\frontend\Blog;  // Make sure to import the Blog model

class IndexController extends Controller
{
    public function index()
    {
        // Fetch latest blogs with pagination or without pagination depending on your needs
        $blogs = Blog::latest()->paginate(5);  // Fetch latest blogs and paginate them

        // Pass the blogs to the view
        return view('frontend.index', compact('blogs'));  // Return the home page view with blogs
    }
}

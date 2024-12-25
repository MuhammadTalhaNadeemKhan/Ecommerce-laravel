<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index'); // Home page
    }

    public function about()
    {
        return view('about'); // About Us page
    }

    public function blog()
    {
        return view('blog'); // Blog page
    }

    public function contact()
    {
        return view('contact'); // Contact page
    }

    public function faq()
    {
        return view('faq'); // FAQ page
    }

    public function login()
    {
        return view('login'); // Login page
    }

    public function policy()
    {
        return view('policy'); // Policy page
    }

    public function return()
    {
        return view('return'); // Return Policy page
    }

    public function service()
    {
        return view('service'); // Services page
    }

    public function shop()
    {
        return view('shop'); // Shop page
    }

    public function shopSidebarRight()
    {
        return view('shop-sidebar-right'); // Shop with Sidebar page
    }

    public function terms()
    {
        return view('terms'); // Terms and Conditions page
    }
}

<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('frontend.cart'); 
    }
}

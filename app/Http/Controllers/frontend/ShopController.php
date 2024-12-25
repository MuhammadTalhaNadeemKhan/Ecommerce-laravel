<?php

namespace App\Http\Controllers\frontend;


use Illuminate\Http\Request;


use App\Models\backend\Product;

class ShopController extends Controller
{
    public function shop()
    {
        return view('frontend.shop'); // Services page
    }
    // public function index()
    // {
    //     $products = Product::all();
    //     return view('frontend.shop', compact('products'));
    // }
}

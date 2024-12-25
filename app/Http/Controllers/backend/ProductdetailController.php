<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\backend\Controller;
use Illuminate\Http\Request;

class ProductdetailController
{
    public function index()
    {
        return view('backend.product-detail');
    }
}

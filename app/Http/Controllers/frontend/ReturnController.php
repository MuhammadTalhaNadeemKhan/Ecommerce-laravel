<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

class ReturnController extends Controller
{
    public function return()
    {
        return view('frontend.return'); // Return Policy page
    }

}

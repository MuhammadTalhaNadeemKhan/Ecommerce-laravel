<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service()
    {
        return view('frontend.service'); // Services page
    }
}

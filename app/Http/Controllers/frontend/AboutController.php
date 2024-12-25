<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return view('frontend.about'); // About Us page
    }

}

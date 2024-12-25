<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function terms()
    {
        return view('frontend.terms'); // Terms and Conditions page
    }
}

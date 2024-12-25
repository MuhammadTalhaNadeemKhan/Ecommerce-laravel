<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function policy()
    {
        return view('frontend.policy'); // Policy page
    }
}

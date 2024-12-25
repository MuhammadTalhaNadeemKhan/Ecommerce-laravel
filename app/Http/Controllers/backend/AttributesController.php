<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\backend\Controller;
use Illuminate\Http\Request;

class AttributesController extends Controller
{
    public function index()
    {
        return view('backend.attributes');
    }
}

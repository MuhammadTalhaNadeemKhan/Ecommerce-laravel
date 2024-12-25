<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\backend\Controller;

use Illuminate\Http\Request;

class AlluserController
{
    public function index()
    {
        return view('backend.all-user');
    }
}

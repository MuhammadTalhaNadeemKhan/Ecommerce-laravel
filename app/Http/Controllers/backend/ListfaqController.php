<?php

namespace App\Http\Controllers\backend;
use App\Models\backend\Faq;
use App\Http\Controllers\backend\Controller;

use Illuminate\Http\Request;

class ListfaqController
{
    public function index()
    {
        return view('backend.list-faq');
    }
}

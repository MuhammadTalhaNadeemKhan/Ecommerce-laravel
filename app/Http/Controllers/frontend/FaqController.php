<?php

namespace App\Http\Controllers\frontend;

use App\Models\backend\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function faq()
    {
        $faqs = Faq::all();
        return view('frontend.faq', ['faqs'=>Faq::get()]);
    }
}

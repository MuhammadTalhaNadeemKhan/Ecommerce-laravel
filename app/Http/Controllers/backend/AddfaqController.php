<?php

namespace App\Http\Controllers\backend;
use App\Models\backend\Faq;
use App\Http\Controllers\backend\Controller;

use Illuminate\Http\Request;

class AddfaqController
{
    public function index()
    {
        return view('backend.add-faq');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        // Save the FAQ in the database
        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->back()->with('success', 'FAQ added successfully!');
    }
}

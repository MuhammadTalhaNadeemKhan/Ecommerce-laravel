<?php

namespace App\Http\Controllers\frontend;

use App\Models\frontend\Contact;   
use Illuminate\Http\Request;

class ContactController extends Controller
{
     
    public function contact()
    {
        return view('frontend.contact');
    }

     
    public function store(Request $request)
    {
         
        $validated = $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email|max:50',
            'message' => 'required|string|max:1000',
        ]);

         
        $contact = Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
            'status' => 0,  
        ]);

         
        return back()->with('success', 'Your message has been sent successfully!');
    }
}

<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\backend\Controller;
use App\Models\backend\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index()
    {
        return view('backend.sign-up');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password); // Encrypt password
        $admin->save();

        return redirect()->route('admin.login')->with('success', 'Registration successful. Please login.');
    }
}

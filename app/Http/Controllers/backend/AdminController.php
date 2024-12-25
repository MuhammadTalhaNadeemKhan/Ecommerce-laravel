<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\backend\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Show the admin login form
    public function showLoginForm()
    {
        return view('backend.admin.login');
    }

    // Handle the login attempt
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Auth::login($admin);  // Login the admin
            return redirect()->route('admin.dashboard');  // Redirect to admin dashboard or homepage
        }

        return back()->withErrors(['email' => 'These credentials do not match our records.']);
    }

    // Handle the logout functionality
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
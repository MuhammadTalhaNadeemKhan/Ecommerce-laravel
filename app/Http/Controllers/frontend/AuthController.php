<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Models\frontend\UserInfo; // Adjusted to correct namespace for UserInfo model
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show the login and register page
    public function showForm()
    {
        return view('frontend.login'); // Assuming 'frontend.login_register' is your view for login/register forms
    }

    // Handle the registration
    public function register(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:userinfo,email',
            'password' => 'required|string|min:6|confirmed',  // Confirm password rule
        ]);

        // Create a new user
        $user = UserInfo::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hashing the password
            'ip_address' => $request->ip(), // Capture the user's IP address
        ]);

        // Log the user in
        Auth::login($user);

        // Redirect to the dashboard or home page after successful registration
        return redirect()->route('home')->with('success', 'Registration successful! Welcome.');
    }

    // Handle the login
    public function login(Request $request)
    {
        // Validate login input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redirect to dashboard if login is successful
            return redirect()->route('home')->with('success', 'Login successful!');
        }

        // Return back with error message if login fails
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    // Handle the logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login-re')->with('success', 'Logged out successfully');
    }
}

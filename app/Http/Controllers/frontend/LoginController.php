<?php


namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Models\frontend\UserInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Show the login and registration form
    public function showLoginRegisterForm()
    {
        return view('frontend.login');  // Ensure this view includes both the login and registration forms
    }

    // Handle login logic
    public function login(Request $request)
    {
        // Validate input data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home');  // Redirect to home if login is successful
        }

        // Return back with an error if login fails
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Handle registration logic
    public function register(Request $request)
    {
        // Validate registration data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:userinfo,email',
            'password' => 'required|string|min:4|confirmed',  // Password confirmation
        ]);

        // Create and save the new user
        $user = new UserInfo();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);  // Hash the password
        $user->ip_address = $request->ip();  // Save user's IP address
        $user->save();  // Save the user to the database

        // Redirect to the home page with a success message
        return redirect()->route('login-re')->with('success', 'Registration successful! Please log in.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Inertia\Inertia;

class LoginController extends Controller
{
    public function index(){
        return Inertia::render("Login");
    }

    public function authenticate(Request $request){
        // Validate the incoming request
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (auth()->attempt($validated)) {
            // Authentication successful, regenerate session and redirect to home page
            $request->session()->regenerate();
            return redirect()->route('HomePage')->with('message', 'Login Succesfully');
        }

        // Authentication failed, redirect back to login page with error message
        return redirect()->route('Login')->withErrors([
            'email'=> "Failed to log in! Please try again!"
        ]);
    }

    public function destroy(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

    return redirect()->route('Login');
    }


}

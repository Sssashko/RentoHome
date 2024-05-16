<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    public function index() {
        return Inertia::render("Register");
    }
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|min:3|max:40',
            'email' =>'required|email|unique:users,email',
            'password' => 'required|min:3|confirmed'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),]);

            return redirect()->route('HomePage')->with('message', 'Register Succesfully');
    }
}

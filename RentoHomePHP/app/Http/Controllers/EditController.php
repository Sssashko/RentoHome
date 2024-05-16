<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\User;
class EditController extends Controller
{
    public function index() {
        $user = User::find(auth()->user()->id);
        return Inertia::render("EditPage", ['user'=>$user]);
    }
    public function update(Request $request ){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255']
        );

        // Get the authenticated user
        $user = User::find(auth()->user()->id);

        // Update the user data
        $user->name = $validatedData['name'];
        $user->phone = $validatedData['phone'];
        $user->email = $validatedData['email'];

        // Save the changes to the user
        $user->save();

        // Redirect back with a success message
        return redirect('Profile');
    }
}



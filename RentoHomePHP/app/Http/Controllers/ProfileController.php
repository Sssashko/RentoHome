<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $user = auth()->user();
        return Inertia::render("Profile",[
            'user'=>$user,
        ]);
    }
    public function delete() {
        $user = User::find(auth()->id());

        if ($user && Auth::id() == $user->id) {
            Auth::logout();
            $user->delete();

            return redirect()->route('HomePage');
        }

        return redirect()->route('HomePage');
    }
}

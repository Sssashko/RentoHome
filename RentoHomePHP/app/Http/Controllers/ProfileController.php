<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $user = auth()->user();
        return Inertia::render("Profile",[
            'user'=>$user,
        ]);
    }
}

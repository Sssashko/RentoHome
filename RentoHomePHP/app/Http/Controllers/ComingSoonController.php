<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

use Illuminate\Http\Request;

class ComingSoonController extends Controller
{
    public function index() {
        return Inertia::render("ComingSoon");
    }
}

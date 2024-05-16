<?php

namespace App\Http\Controllers;

use Inertia\Inertia;


class Homecontroller extends Controller
{
    public function index() {
        return Inertia::render("HomePage");
    }
}

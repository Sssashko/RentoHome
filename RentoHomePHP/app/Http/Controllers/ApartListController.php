<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class ApartListcontroller extends Controller
{
    public function index(){
        return Inertia::render('ApartList');
    }
}

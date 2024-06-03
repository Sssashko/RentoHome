<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Apartament;

class ApartListcontroller extends Controller
{
    public function index() {
        $apartaments = Apartament::all();
        return Inertia::render("ApartList", ['apartaments'=>$apartaments]);
    }

    public function store(Request $request)
    {
        $apartaments = Apartament::create($request->all());
        return response()->json($apartaments, 201);
    }

    public function apartamentsapi() {
        $apartaments = Apartament::all();
        return response()->json($apartaments);
    }
}

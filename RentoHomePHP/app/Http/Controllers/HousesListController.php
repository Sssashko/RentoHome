<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\House;

class HousesListController extends Controller
{
    public function index() {
        $houses = House::all();
        return Inertia::render("HousesList", ['houses'=>$houses]);
    }

    public function store(Request $request)
    {
        $house = House::create($request->all());
        return response()->json($house, 201);
    }

    public function housesapi() {
        $houses = House::all();
        return response()->json($houses);
    }
}

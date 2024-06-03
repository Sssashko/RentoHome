<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Term;

class TermController extends Controller
{
    public function index() {
        $terms = Term::all();
        return Inertia::render("TermsOfUsage", ['terms'=>$terms]);
    }

    public function store(Request $request)
    {
        $term = Term::create($request->all());
        return response()->json($term, 201);
    }

    public function termsapi() {
        $terms = Term::all();
        return response()->json($terms);
    }
}

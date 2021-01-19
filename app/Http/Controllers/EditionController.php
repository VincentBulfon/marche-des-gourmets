<?php

namespace App\Http\Controllers;

use App\Models\Years;

class EditionController extends Controller
{
    public function index()
    {
        $year = Years::all()->last();
        return view('edition', compact('year'));
    }
}

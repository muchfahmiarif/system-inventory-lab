<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Glassware;

class GlasswareController extends Controller
{
    public function index () {
        return view('frontend.inventory.glassware', [
            'title' => "Alat Gelas",
            "glasswares" => Glassware::with(['shape', 'color'])->latest()->get()
        ]);
    }

    public function show (Glassware $glassware) {
        return view('frontend.inventory.single-glassware', [
            "title" => "Single Glassware",
            "glasware" => "$glassware",
        ]);
    }
}

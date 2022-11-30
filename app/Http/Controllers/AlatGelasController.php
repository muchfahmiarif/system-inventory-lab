<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlatGelasController extends Controller
{
    public function index () {
        return view('frontend.inventory.glassware', [
            'title' => "Alat Gelas",
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index () {
        return view ('frontend.about.index', [
            'title' => "About Andev",
        ]);
    }
}

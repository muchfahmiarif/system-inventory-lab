<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Standard;

class StandardController extends Controller
{
    public function index () {
        return view('frontend.inventory.standards', [
            "title" => "Working Standar",
            "standards" => Standard::with(['trademark', 'location'])->latest()->get()
        ]);
    }

    public function show (Standard $standar) {
        return view('frontend.inventory.single-standard', [
            "title" => "Single Standar",
            "standar" => $standar
        ]);
    }
}

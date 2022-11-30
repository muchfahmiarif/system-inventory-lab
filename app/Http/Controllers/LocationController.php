<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(Location $location) {
        return view('frontend.inventory.location-standard', [
            'title' => $location->name,
            'standards' => $location->standard->load('location', 'trademark'),
            'location' => $location->name,
        ]);
    }
}

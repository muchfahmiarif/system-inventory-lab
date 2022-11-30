<?php

namespace App\Http\Controllers;

use App\Models\Trademark;
use Illuminate\Http\Request;

class TrademarkController extends Controller
{
    public function index (Trademark $trademark) {
        return view('frontend.inventory.brand-standard', [
            'title' => 'Trademark',
            'standards' => $trademark->standard->load('location', 'trademark'),
        ]);
    }
}

<?php

namespace App\Http\Controllers\Guest;


use App\Http\Controllers\Controller;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $trains =  Train::orderBy('departureTime', 'asc')->get();
        return view('nextTrains', compact('trains'));
    }
}

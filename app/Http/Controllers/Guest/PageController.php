<?php

namespace App\Http\Controllers\Guest;


use App\Http\Controllers\Controller;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {

        return view('home');
    }

    public function nextTrains()
    {
        $trains =  Train::orderBy('departureTime', 'asc')->get();
        return view('nextTrains', compact('trains'));
    }
}

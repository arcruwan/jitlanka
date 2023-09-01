<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class minnariyaEcoParkTourContoller extends Controller
{
    public function index(){
        return view('dayTours.minnariyaEcoParkTour.index');
    }
}

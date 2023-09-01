<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roundTourFiveController extends Controller
{
    public function index(){
        return view('roundTours.tour5.index');
    }
}

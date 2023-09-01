<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roundTourEightController extends Controller
{
    public function index(){
        return view('roundTours.tour8.index');
    }
}

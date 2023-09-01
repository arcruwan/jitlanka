<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roundTourOneController extends Controller
{
    public function index(){
        return view('roundTours.tour1.index');
    }
}

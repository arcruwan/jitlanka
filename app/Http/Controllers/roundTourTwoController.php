<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roundTourTwoController extends Controller
{
    public function index(){
        return view('roundTours.tour2.index');
    }
}

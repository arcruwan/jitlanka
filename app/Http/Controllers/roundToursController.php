<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roundToursController extends Controller
{
    public function index(){
        return view('roundTours.AllRoundTours.index');
    }
}

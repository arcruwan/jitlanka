<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirPortController extends Controller
{
    public function index(){
        return view('dayTours.airPort.index');
    }
}

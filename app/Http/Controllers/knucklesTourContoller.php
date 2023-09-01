<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class knucklesTourContoller extends Controller
{
    public function index(){
        return view('dayTours.knucklesTour.index');
    }
}

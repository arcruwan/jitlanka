<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ellaTourContoller extends Controller
{
    public function index(){
        return view('dayTours.ellaTour.index');
    }
}

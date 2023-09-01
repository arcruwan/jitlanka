<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kithulgalaTourContoller extends Controller
{
    public function index(){
        return view('dayTours.kithulgalaTour.index');
    }
}

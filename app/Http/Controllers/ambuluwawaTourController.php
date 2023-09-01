<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ambuluwawaTourController extends Controller
{
    public function index(){
        return view('dayTours.ambuluwawaTour.index');
    }
}

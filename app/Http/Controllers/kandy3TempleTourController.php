<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kandy3TempleTourController extends Controller
{
    public function index(){
        return view('dayTours.kandy3Tour.index');
    }
}

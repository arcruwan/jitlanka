<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class polonnaruwaTourController extends Controller
{
    public function index()
    {
        return view('dayTours.PolonnaruwaTour.index');
    }
}

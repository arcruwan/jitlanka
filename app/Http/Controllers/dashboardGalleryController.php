<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardGalleryController extends Controller
{
public function index(){
    return view('dashboard.gallery');
}
}

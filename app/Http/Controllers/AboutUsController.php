<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function aboutUs(){
        return view('front-end.home.about-us');
    }
}

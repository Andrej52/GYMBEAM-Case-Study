<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function LandPage()
    {
        return view('LandPage');
    }

    public function productsInfo()
    { 
        return view('productsInfo');    
    }

    public function rated()
    { 
        return view('rated');    
    }
}

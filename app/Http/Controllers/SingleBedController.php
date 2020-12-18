<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleBedController extends Controller
{
    public function index()
    {
        return view('pages/products/single-bed');
    }
}

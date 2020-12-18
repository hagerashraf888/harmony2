<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SofaController extends Controller
{
    public function index()
    {
        return view('pages/products/sofa');
    }
}

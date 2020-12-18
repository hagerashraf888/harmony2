<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MirrorController extends Controller
{
    public function index()
    {
        return view('pages/products/mirror');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClosetController extends Controller
{
    public function index()
    {
        return view('pages/products/closet');
    }
}

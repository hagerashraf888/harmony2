<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterBedController extends Controller
{
    public function index()
    {
        return view('pages/products/master-bed');
    }
}

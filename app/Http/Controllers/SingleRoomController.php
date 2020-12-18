<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleRoomController extends Controller
{
    public function index()
    {
        return view('pages/rooms/single');
    }
}

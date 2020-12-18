<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivingRoomController extends Controller
{
    public function index()
    {
        return view('pages/rooms/living');
    }
}

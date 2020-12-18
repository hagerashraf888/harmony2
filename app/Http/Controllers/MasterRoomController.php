<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterRoomController extends Controller
{
    public function index()
    {
        return view('pages/rooms/master');
    }
}

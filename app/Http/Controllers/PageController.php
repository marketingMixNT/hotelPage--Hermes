<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class PageController extends Controller
{

    public function home(){
        return view('pages.home.index',['rooms'=>Room::all()]);
    }
    public function rooms(){
        return view('pages.rooms.index',['rooms'=>Room::all()]);
    }
    public function room(){
        return view('pages.rooms.index',['rooms'=>Room::find(1)]);
    }
}

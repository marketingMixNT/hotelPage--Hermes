<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class PageController extends Controller
{

    public function home()
    {
        return view('pages.home.index', ['rooms' => Room::all()]);
    }
    public function rooms()
    {
        return view('pages.rooms.index', ['rooms' => Room::all()]);
    }
    public function room($name)
    {
        return view('pages.room.index', ['rooms' => Room::all(),'room' => Room::find($name)]);
    }

    public function restaurant()
    {
        return view('pages.restaurant.index');
    }
    public function contact()
    {
        return view('pages.contact.index');
    }
}

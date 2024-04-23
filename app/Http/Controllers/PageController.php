<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

public $rooms = [
[
    'id'=>1,
    'name' =>'Rysy',
    'thumbnail'=>'assets/images/rooms/1.jpeg',
    'link'=>'#',
    'persons'=>'1 osoba'
],
[
    'id'=>2,
    'name' =>'Giewont',
    'thumbnail'=>'assets/images/rooms/2.jpeg',
    'link'=>'#',
    'persons'=>'2 osoby'
],
[
    'id'=>3,
    'name' =>'Kasprowy',
    'thumbnail'=>'assets/images/rooms/3.jpeg',
    'link'=>'#',
    'persons'=>'2 osoby'
],
[
    'id'=>4,
    'name' =>'Gerlach',
    'thumbnail'=>'assets/images/rooms/4.jpeg',
    'link'=>'#',
    'persons'=>'3 osoby'
],
[
    'id'=>5,
    'name' =>'Kościelec',
    'thumbnail'=>'assets/images/rooms/5.jpeg',
    'link'=>'#',
    'persons'=>'6 osób'
],
];


    public function home(){
        return view('pages.home.index',['rooms'=>$this->rooms]);
    }
}

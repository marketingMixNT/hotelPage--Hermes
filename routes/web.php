<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;



Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/pokoje',[PageController::class,'rooms'])->name('rooms');
Route::get('/pokoje/{name}',[PageController::class,'room'])->name('room');
Route::get('/restauracja',[PageController::class,'restaurant'])->name('restaurant');

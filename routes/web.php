<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;



Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/pokoje', [PageController::class, 'rooms'])->name('rooms');
Route::get('/pokoje/{name}', [PageController::class, 'room'])->name('room');
Route::get('/restauracja', [PageController::class, 'restaurant'])->name('restaurant');
Route::get('/atrakcje', [PageController::class, 'attractions'])->name('attractions');
Route::get('/spa', [PageController::class, 'spa'])->name('spa');
Route::get('/kontakt', [PageController::class, 'contact'])->name('contact');
Route::post('/kontakt', [FormController::class, 'contact_form'])->name('contact_form');

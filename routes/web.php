<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    $navbar = config('db.navbar');
    $comics = config('db.comics');
    $cardNav = config('db.navCardsElements');
    return view('home', compact('navbar', 'comics', 'cardNav'));
})->name('home');

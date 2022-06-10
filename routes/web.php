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

/****** Start Layouts ******/
Route::get('/', function(){
    return view('layouts/app');
})->name('app');
/****** End Layouts ******/

/****** Start Partials ******/
Route::get('/partials/header', function(){
    $navbar = config('db.navbar');
    return view('/partials/header', compact('navbar'));
})->name('header');

Route::get('/partials/jumbotron', function(){
    return view('/partials/jumbotron');
})->name('jumbotron');

Route::get('/partials/cards', function(){
    $cards = config('db.cards');
    return view('/partials/cards', compact('cards'));
})->name('cards');

Route::get('/partials/footer', function(){
    return view('/partials/footer');
})->name('footer');
/****** End Partials ******/

/****** Start Components ******/
Route::get('/', function(){
    return view('/components/home');
})->name('home');

Route::get('/components/characters', function(){
    return view('/components/characters');
})->name('characters');

Route::get('/components/comics', function (){
    $comics = config('db.comics');
    return view('/components/comics', compact('comics'));
})->name('comics');

Route::get('/components/movies', function(){
    return view('/components/movies');
})->name('movies');

Route::get('/components/tv', function(){
    return view('/components/tv');
})->name('tv');

Route::get('/components/games', function(){
    return view('/components/games');
})->name('games');

Route::get('/components/collectibles', function(){
    return view('/components/collectibles');
})->name('collectibles');

Route::get('/components/videos', function(){
    return view('/components/videos');
})->name('videos');

Route::get('/components/fans', function(){
    return view('/components/fans');
})->name('fans');

Route::get('/components/news', function(){
    return view('/components/news');
})->name('news');

Route::get('/components/shop', function(){
    return view('/components/shop');
})->name('shop');
/****** End Components ******/

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
    $comics = config('db.comics');
    $navlist = config('db.navlist');
    
    return view('welcome', compact('comics', 'navlist'));
}) -> name('home');

Route::get('/characters', function() {
    $navlist = config('db.navlist');

    return view('characters', compact('navlist'));
}) -> name('characters');

Route::get('/comics', function() {
    $navlist = config('db.navlist');

    return view('comics', compact('navlist'));
}) -> name('comics');

Route::get('/movies', function() {
    $navlist = config('db.navlist');

    return view('movies', compact('navlist'));
}) -> name('movies');

Route::get('/tv', function() {
    $navlist = config('db.navlist');

    return view('tv', compact('navlist'));
}) -> name('tv');

Route::get('/games', function() {
    $navlist = config('db.navlist');

    return view('games', compact('navlist'));
}) -> name('games');

Route::get('/collectibles', function() {
    $navlist = config('db.navlist');

    return view('collectibles', compact('navlist'));
}) -> name('collectibles');

Route::get('/video', function() {
    $navlist = config('db.navlist');

    return view('video', compact('navlist'));
}) -> name('video');

Route::get('/fans', function() {
    $navlist = config('db.navlist');

    return view('fans', compact('navlist'));
}) -> name('fans');

Route::get('/news', function() {
    $navlist = config('db.navlist');

    return view('news', compact('navlist'));
}) -> name('news');

Route::get('/shop', function() {
    $navlist = config('db.navlist');

    return view('shop', compact('navlist'));
}) -> name('shop');



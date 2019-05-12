<?php

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
    return view('home');
});

Route::get('/institute', function () {
    return view('institute');
});

Route::get('/administration', function () {
    return view('administration');
});

Route::get('/departments', function () {
    return view('department');
});

Route::get('/admission', function () {
    return view('admission');
});

Route::get('/e-learning', function () {
    return view('e-learning');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/our-mission', function () {
    return view('vision');
});

Route::get('/our-rules', function () {
    return view('rules');
});

Route::get('/admin-staff', function () {
    return view('admin-staff');
});

Route::get('/ex-principals', function () {
    return view('ex-principals');
});

Route::get('/dean', function () {
    return view('dean_page');
});

Route::get('/vice-principal', function () {
    return view('vice-principal');
});

Route::get('/college-council', function () {
    return view('college-council');
});

Route::get('/principal', function () {
    return view('principals');
});

Route::get('/readersClub', function () {
    return view('readers_club');
});

Route::get('/writersClub', function () {
    return view('writers_club');
});

Route::get('/filmClub', function () {
    return view('film_club');
});

Route::get('/cinnamonClub', function () {
    return view('cinnamon_club');
});

Route::get('/pressClub', function () {
    return view('press_club');
});

Route::get('/gcdc', function () {
    return view('drama_club');
});

Route::get('/entrepreneurialClub', function () {
    return view('entrepreneurial_club');
});

Route::get('/ncc', function () {
    return view('ncc');
});

Route::get('/ncc_army', function () {
    return view('ncc_army');
});

Route::get('/ncc_air', function () {
    return view('ncc_air');
});

Route::get('/ncc_navy', function () {
    return view('ncc_navy');
});

Route::get('/nss', function () {
    return view('nss');
});
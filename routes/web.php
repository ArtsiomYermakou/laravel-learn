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
    return view('welcome');
});

Route::get('/home', function () {
    $res = 2 + 3;
    $name = 'Artem';

// 1.
//    return view('home', ['res' => $res, 'name' => $name]);
// 2.
    return view('home', compact('res', 'name'));
});

Route::get('/about', function () {
    return view('about');
});

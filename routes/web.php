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


//Route::post('/send-email', function () {
//    if (!empty($_POST)) {
//        dump($_POST);
//    }
//    return 'Send Email';
//});

//Route::match(['post', 'get'], '/contact', function () {
//    if (!empty($_POST)) {
//        dump($_POST);
//    }
//    return view('/contact');
//});


Route::match(['post', 'get'], '/contact', function () {
    if (!empty($_POST)) {
        dump($_POST);
    }
    return view('/contact');
})->name('contact');

Route::permanentRedirect('/about', '/contact');

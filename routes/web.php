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

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', function () {
    return view('layouts.app');
});


Route::get('/{path}', function ($path) {
    if (strpos($path, 'admin') !== false) {
        return view('layouts.admin');
    } else {
        return view('layouts.app');
    }
})->where('path', '.*');
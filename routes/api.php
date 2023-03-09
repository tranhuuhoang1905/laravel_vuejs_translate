<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('posts', 'App\Http\Controllers\API\PostController@index');
Route::group(['prefix' => 'post'], function () {
    Route::post('add', 'App\Http\Controllers\API\PostController@add');
    Route::get('edit/{id}', 'App\Http\Controllers\API\PostController@edit');
    Route::post('update/{id}', 'App\Http\Controllers\API\PostController@update');
    //người có role:admin mới có quyền truy cập link api/posts/delete 
    Route::delete('delete/{id}', 'App\Http\Controllers\API\PostController@delete');
});

Route::get('languages', 'App\Http\Controllers\API\LanguagesController@index');
Route::group(['prefix' => 'language'], function () {
    Route::post('add', 'App\Http\Controllers\API\LanguagesController@add');
    Route::get('edit/{id}', 'App\Http\Controllers\API\LanguagesController@edit');
    Route::post('update/{id}', 'App\Http\Controllers\API\LanguagesController@update');
    //người có role:admin mới có quyền truy cập link api/posts/delete 
    Route::delete('delete/{id}', 'App\Http\Controllers\API\LanguagesController@delete');
});

// Route::get('', 'App\Http\Controllers\API\WordsController@index');
Route::group(['prefix' => 'word'], function () {
    Route::get('/', 'App\Http\Controllers\API\WordsController@index');
    Route::post('search/{id}', 'App\Http\Controllers\API\WordsController@search');
    Route::post('add', 'App\Http\Controllers\API\WordsController@add');
    Route::get('edit/{id}', 'App\Http\Controllers\API\WordsController@edit');
    Route::post('update/{id}', 'App\Http\Controllers\API\LangWordsControlleruagesController@update');
    //người có role:admin mới có quyền truy cập link api/posts/delete 
    // Route::delete('delete/{id}', 'App\Http\Controllers\API\WordsController@delete');
});

Route::post('login', 'App\Http\Controllers\API\AuthController@login');
Route::post('register', 'App\Http\Controllers\API\AuthController@register');

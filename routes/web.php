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
// Welcome
Route::get('/', function () {
    return view('welcome');
});

//About Page
Route::get('/about', function () {
    return view('about');
});

//Version Page
Route::get('/version', function () {
    return view('version');
});

//tutorial Page
Route::get('/tutorial', function () {
    return view('tutorial');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

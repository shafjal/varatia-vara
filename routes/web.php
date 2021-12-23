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
    return view('page.welcome');
});

//About Page
Route::get('/about', function () {
    return view('page.about');
});

//Version Page
Route::get('/version', function () {
    return view('page.version');
});

//tutorial Page
Route::get('/tutorial', function () {
    return view('page.tutorial');
});
//contact Page
Route::get('/contact', function () {
    return view('page.contact');
});

//Profile
Auth::routes();
//Profile
Route::get('/profile', 'HomeController@profile')->name('profile');
//Message
Route::get('/message', 'MessageController@index')->name('message');
//Home
Route::get('/home', 'HomeController@index')->name('home');
//Select Dashboard
Route::get('/selectDashboard', 'HomeController@selectDashboard')->name('selectDashboard');
//Tenant
Route::get('/tenant', 'TenantController@index')->name('tenant');
Route::get('/tenant/create', 'TenantController@create')->name('tenant.create');
Route::post('/tenant/create', 'TenantController@store')->name('tenant.store');
Route::get('/tenant/{id}', 'TenantController@destroy')->name('tenant.destroy');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

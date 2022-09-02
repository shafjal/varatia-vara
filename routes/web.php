<?php

use App\Apartment;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//Admin Part -------------------------------------------------------------------------
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
//Report Genenate
Route::get('/report', 'ReportController@index')->name('report.generate');
//Notice
Route::get('/notice', 'NoticeController@index')->name('notice');
//Apartment Create
Route::post('/selectDashboard', 'HomeController@store')->name('apartment.store');
// Apartment Destroy 
Route::get('/selectDashboard/{id}', 'HomeController@destroy')->name('apartment.destroy');
// Chuktipotro
Route::get('/chuktipotro-tenant', 'ChuktiPotro@index')->name('chuktipotro.index');
Route::get('/chuktipotro-view', 'ChuktiPotro@print')->name('chuktipotro.print');

//Bank -RecourceRoute
Route::resource('bank', 'BankController');
Route::post('bank/delete', 'HomeController@bankDestroy')->name('bankAccount.Delete');
Route::get('bank/delete/all', 'HomeController@bankDestroyAll')->name('bankAccount.Delete.all');


//User Part -------------------------------------------------------------------------
//Tenant User
Route::get('/tenantDashboard', 'TenantUserContorller@index')->name('tenant.Dashboard');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

<?php

use App\Apartment;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
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
//Register Request

// Route::get('/register/request', 'RegisterRequestController@index')->name('register.request');
Route::post('/register/request', 'RegisterRequestController@store')->name('register.store');
Route::get('/register/request/show', 'RegisterRequestController@ShowReq')->name('register.showReq');
Route::post('/register/request/show/{id}', 'RegisterRequestController@destroy')->name('register.destroy');
Route::post('/register/request/show/{id}/approve', 'RegisterRequestController@apporve')->name('register.apporve');
Route::get('/register/request', function () {
   return view('auth.registerRequest');
})->name('register.request');

// Welcome
Route::get('/', function () {
    return view('page.welcome');
})->name('welcome');

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
//contact Page
Route::get('/login/tenant', function () {
    return view('auth.tenatLogin');
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
Route::get('/home/{id}', 'HomeController@index2')->name('home2');
//Select Dashboard
Route::get('/selectDashboard', 'HomeController@selectDashboard')->name('selectDashboard');
//Tenant 
Route::get('/tenant', 'TenantController@index')->name('tenant');
Route::get('/tenant/create', 'TenantController@create')->name('tenant.create');
Route::post('/tenant/create', 'TenantController@store')->name('tenant.store');
Route::get('/tenant/{id}', 'TenantController@destroy')->name('tenant.destroy');
Route::get('/tenant/family/add', 'TenantController@familyMember')->name('tenant.family');
//Report Genenate
Route::get('/report', 'ReportController@index')->name('report.generate');
//Notice -RecourceRoute
Route::resource('notice', 'NoticeController');
//Apartment Create
Route::post('/selectDashboard', 'HomeController@store')->name('apartment.store');
// Apartment Destroy 
Route::get('/selectDashboard/{id}', 'HomeController@destroy')->name('apartment.destroy');
// Chuktipotro
Route::get('/chuktipotro-tenant', 'ChuktiPotro@index')->name('chuktipotro.index');
Route::get('/chuktipotro-view', 'ChuktiPotro@print')->name('chuktipotro.print');

//Bank -RecourceRoute
Route::resource('bank', 'BankController');
Route::post('banks/mobileBanks', 'BankController@store');
Route::get('banks/mobileBanks', 'HomeController@mcreate')->name('mBank');
Route::post('bank/delete', 'HomeController@bankDestroy')->name('bankAccount.Delete');
Route::get('bank/delete/all', 'HomeController@bankDestroyAll')->name('bankAccount.Delete.all');


//User Part -------------------------------------------------------------------------
//Tenant User
Route::get('/tenantDashboard', 'TenantUserContorller@index')->name('tenant.Dashboard');
//Tenant Notice 
Route::get('/tenantNotice', 'HomeController@tenantNotice')->name('tenant.notice');
//Leave Notice 
Route::get('/leave/notice', 'LeaveNoticeController@index')->name('leave.notice');
Route::post('/leave/notice', 'LeaveNoticeController@store')->name('leave.store');
Route::post('/leave/notice/{id}', 'LeaveNoticeController@destroy')->name('leave.destroy');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//test
Route::get('/test', 'TenantController@checkUserid')->name('test');
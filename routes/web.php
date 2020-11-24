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

Route::get('/', 'HomeController@index')->name('home');

// admin
Route::get('admin', function () {
    return view('admin.pages.index');
});

Route::get('/admin/login', function () {
    return view('admin.pages.login');
});


Route::get('/admin/login', function () {
    return view('admin.pages.login');
});

Route::get('/login', function () {
    return view('client.pages.login');
});
// client
Route::get('/home', function () {
    return view('client.layouts.master');
});
Route::get('/home/profile', function () {
    return view('client.pages.profile');
});


Route::get('/home/tour_details', function () {
    return view('client.layouts.tour_details');
});
// i18
Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', 'changeLanguageController@changeLanguage')
        ->name('user.change-language');
});

Route::resource('categorie','CategoriesController');







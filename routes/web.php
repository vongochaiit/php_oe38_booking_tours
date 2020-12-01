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

Route::group([
    'prefix'=>'admin',
    'namespace'=>'Admin',
    'as' => 'admin.',
],function(){
    Route::get('login', 'LoginController@index')->name('showlogin');
    Route::post('login', 'LoginController@login')->name('login');
    Route::group([ 'middleware' => 'check_admin'], function(){
        Route::get('logout' , 'LoginController@logout')->name('logout');
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('tour', 'TourController');
        Route::resource('/category','CategoryController');
    });
});
Route::group(['namespace'=>'User'], function(){
    Route::get('login', 'LoginController@index')->name('showlogin');
    Route::post('login', 'LoginController@login')->name('login'); 
    Route::get('home', 'HomeController@index')->name('home.index');
    Route::get('logout', 'LoginController@logout')->name('logout');
    Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
    Route::get('/callback/{provider}', 'SocialController@callback');

    Route::get('/tour/index', 'TourController@index')->name('user.tour.index');
    Route::get('/tour/show/{id}', 'TourController@show')->name('user.tour.show');
    Route::resource('review','ReviewController');
    Route::get('review/create/{id}','ReviewController@createReviews')->middleware('auth')->name('review.createReview');
});

Route::get('/home/tour_details', function () {
    return view('client.layouts.tour_details');
});
// i18
Route::group(['middleware' => 'locale'], function() {
    Route::get('change-language/{language}', 'changeLanguageController@changeLanguage')
        ->name('user.change-language');
});

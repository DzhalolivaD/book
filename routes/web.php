<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

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

Route::group([], function()
{
    /**
     * Home Routes
     */
    Route::get('/', 'MainController@index')->name('home');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});

Route::get('/author/{id_author}', 'MainController@idauthor')->name('idauthor');
Route::get('/style/{id_style}', 'MainController@idstyle')->name('idstyle');
Route::get('/home','MainController@home');
Route::get('/style','MainController@style');
Route::get('/author','MainController@author');

Route::get('/search', 'MainController@search');
//Route::get('/tfind','MainController@takefind');

//Route::post('/search', 'MainController@search');
//Route::post( '/' ,function() { return Redirect::to('/search'); });
//Route::post( '/search' ,'MainController@search' );
Route::get('/userpage','MainController@userpage')->middleware('auth');
Route::get('/auth', 'MainController@auth')->name('auth');
Route::post('/auth/check', 'MainController@auth');



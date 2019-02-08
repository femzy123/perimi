<?php

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

//Route::get('/', function () {
//    return redirect('/admin');
//});

Route::get('/', 'IndexController@index');

Route::resources([
    'category' => 'CategoryController',
    'event' => 'EventController',
    'listings' => 'ListingsController'
]);

Route::get('/dashboard/{id}', 'DashboardController@profile');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

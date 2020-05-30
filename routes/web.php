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
Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('clear-compiled');
    Artisan::call('config:cache');

    return '<h1>Cache facade value cleared </h1>';

});

//Route::get('/', function () {
//    return view('index');
//});
Route::any('contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'PostJobController@index')->name('home');
Route::post('/create', 'PostJobController@create')->name('create');
Route::any('/send_message', 'FrontController@postContact')->name('send_message');
Route::get('/', 'FrontController@index')->name('index');
Route::get('/job/{id}', 'FrontController@show')->name('job');
Route::get('/jobs', 'FrontController@jobs')->name('jobs');

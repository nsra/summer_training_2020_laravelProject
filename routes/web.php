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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/app', function () {
    return view('layouts.main_layout');
});

Route::get('/blog/index', 'BlogsController@index');


Route::get('/blog/{id}','BlogsController@show');

Route::get('/blog/{id}/edit','BlogsController@edit');

Route::post('/blog/{id}/update','BlogsController@update');
Route::post('/blog/create','BlogsController@store');
Route::get('/blog/create','BlogsController@create');

Route::get('/profile/show', function () {
    return view('profile.show');
});

Route::get('/profile/edit', function () {
    return view('profile.edit');
});

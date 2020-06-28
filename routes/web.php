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

Route::get('/article/index',  ['as' => 'article.index', 'uses'=>'ArticleController@index']);


//Route::get('/article/{id}','ArticleController@show');
//
//Route::get('/article/{id}/edit','ArticleController@edit');
//
//Route::post('/article/{id}/update','ArticleController@update');
//Route::post('/article/store',['as' => 'article.store', 'uses'=>'ArticleController@store']);
//Route::get('/article/create', ['as' => 'article.create', 'uses'=>'ArticleController@create']);

Route::get('/profile/show', function () {
    return view('profile.show');
});

Route::get('/profile/edit', function () {
    return view('profile.edit');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/all', ['as' => 'user.index', 'uses' => 'UserController@index']);
});

Route::get('/language/{lang?}', [
    'as' => 'language.change',
    'uses' => 'LocalizationController@change'
]);

//Route::group(['prefix' => 'article'], function () {
//    Route::get('create', 'ArticleController@create');
//    Route::post('create', ['as' => 'article.store', 'uses' => 'ArticleController@store']);
//    Route::get('/index', ['as' => 'articles.index', 'uses' => 'ArticleController@index']);
//
//
//});
Route::middleware('auth')->group(function () {
    Route::resource('articles', 'ArticleController');
    Route::resource('service_types', 'Service_typesController');
    Route::resource('projects', 'ProjectsController');
    Route::resource('client_reviews', 'Client_reviewsController');
    Route::resource('teams', 'TeamsController');
    Route::resource('services', 'servicesController');
    Route::resource('users', 'UsersController');
    Route::get('/logout/custom', ['as' => 'logout.custom', 'uses' => 'Controller@userLogout']);
    Route::get('/destroy/{id?}', ['as' => 'article.destroy', 'uses' => 'ArticleController@destroy']);
    Route::get('/project/{id?}', ['as' => 'project.destroy', 'uses' => 'ProjectsController@destroy']);

});


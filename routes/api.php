<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

    // Route::middleware('auth:api')->get('/user', function (Request $request) {
    //     return $request->user();
    // });

    Route::get('/language/{lang?}', [
        'as' => 'language.change',
        'uses' => 'LocalizationController@change'
    ]);


    Route::get('/register/user', 'Auth\RegisterController@showUserRegisterForm')->name('user_register');


    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/multiguard_login', 'API\LoginController@showLoginForm')->name('show.multiguard_login');
    Route::post('/multiguard_login', 'API\LoginController@multiguardLogin')->name('multiguard_login');

    Route::post('/register/user', 'API\RegisterController@createUser')->name('user_register');
    Route::post('/forgot_password', 'ApI\ForgetPasswordController@forgot_password');


    Route::group(['middleware' => ['auth:api']], function(){

        Route::get('/user', 'API\UserController@userDashboard')->name('user_dashboard');
        Route::get('/logout/custom', ['as' => 'logout.custom', 'uses' => 'API\Controller@userLogout']);
    
        Route::post('/user_changepassword', ['as'=>'user_password.update','uses'=>'API\UserController@update_user_password']);
        Route::put('/user_editprofile', ['as'=>'user_profile.update','uses'=>'API\UserController@update_user_profile']);
        Route::get('/user_editprofile', ['as' => 'user_profile.edit', 'uses' => 'API\UserController@edit_user_profile']);
        Route::get('/user_changepassword', ['as' => 'user_password.change', 'uses' => 'API\UserController@change_user_password']);
    });

    
    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@home']);

    Route::get('/blogs', ['as' => 'blogs', 'uses' => 'HomeController@blogs']);
    Route::get('/clientreviews', ['as' => 'clientreviews', 'uses' => 'HomeController@client_reviews']);
    Route::get('/workingteam', ['as' => 'workingteam', 'uses' => 'HomeController@working_team']);
    Route::get('/about_us', ['as' => 'about_us', 'uses' => 'HomeController@about_us']);
    Route::get('/blog/{id}', ['as' => 'blog.show', 'uses' => 'HomeController@show_blog']);

   
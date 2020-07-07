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
Route::get('/admin', 'HomeController@admin_index')->name('admin');

Route::get('/app', function () {
    return view('layouts.main_layout');
});

Route::get('/article/index',  ['as' => 'article.index', 'uses'=>'ArticleController@index']);



Route::get('/profile/show', function () {
    return view('profile.show');
});

Route::get('/profile/edit', function () {
    return view('profile.edit');
});

Route::get('/language/{lang?}', [
    'as' => 'language.change',
    'uses' => 'LocalizationController@change'
]);



//Route::get('/login/admin', ['as' => 'getadminlogin', 'uses' =>'Auth\LoginController@showAdminLoginForm']);
//
//Route::post('/login/admin', ['as' => 'postadminlogin', 'uses' => 'Auth\LoginController@adminLogin']);
//

//Route::group(['namespace' => 'Admin'] , function(){
//
//    /****Admin Login Route*****/
//    Route::get('backend/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
//    Route::post('backend/login', 'Auth\LoginController@login')->name('postadmin.login');
//    Route::post('backend/logout', 'Auth\LoginController@logout')->name('logout');
//
//});


Route::group(['middelware' => 'auth:admin'], function () {
    Route::resource('articles', 'ArticleController');
    Route::resource('service_types', 'Service_typesController');
    Route::resource('projects', 'ProjectsController');
    Route::resource('client_reviews', 'Client_reviewsController');
    Route::resource('teams', 'TeamsController');
    Route::resource('users', 'UsersController');
    Route::resource('company_features', 'company_featuresController');
    Route::resource('admins', 'AdminsController');
    Route::resource('permissions', 'PermissionsController');
    Route::resource('roles', 'RolesController');

    Route::get('/logout/custom', ['as' => 'logout.custom', 'uses' => 'Controller@userLogout']);
    Route::get('/destroy/{id?}', ['as' => 'article.destroy', 'uses' => 'ArticleController@destroy']);
    Route::get('/role/{id?}', ['as' => 'role.destroy', 'uses' => 'RolesController@destroy']);
    Route::get('/permission/{id?}', ['as' => 'permission.destroy', 'uses' => 'PermissionsController@destroy']);
    Route::get('/project/{id?}', ['as' => 'project.destroy', 'uses' => 'ProjectsController@destroy']);
    Route::get('/service_type/{id?}', ['as' => 'service_type.destroy', 'uses' => 'Service_typesController@destroy']);
    Route::get('/team/{id?}', ['as' => 'team.destroy', 'uses' => 'TeamsController@destroy']);
    Route::get('/client_review/{id?}', ['as' => 'client_review.destroy', 'uses' => 'Client_reviewsController@destroy']);
    Route::get('/company_feature/{id?}', ['as' => 'company_feature.destroy', 'uses' => 'Company_featuresController@destroy']);
    Route::get('/user/{id?}', ['as' => 'user.destroy', 'uses' => 'UsersController@destroy']);
    Route::get('/admin/{id?}', ['as' => 'admin.destroy', 'uses' => 'AdminsController@destroy']);
    Route::get('/permission/{id?}', ['as' => 'permission.destroy', 'uses' => 'PermissionsController@destroy']);
    Route::get('cms/admins/permissions/{id}', ['as' => 'admin.view_permissions', 'uses' => 'AdminsController@view_permissions']);
    Route::post('cms/permission/byRole', ['as'=>'permission_byRole','uses'=>'admin\RoleController@getByRole']);
    Route::post('/update/admin/permissions', ['as'=>'update_admin_permissions','uses'=>'AdminsController@update_admin_permissions']);
    Route::post('/permissionbyrole', ['as'=>'get_permissions_by_role','uses'=>'AdminsController@get_permissions_by_role']);
    Route::get('/viewpermissions/role/{id}', ['as'=>'role.view_permissions','uses'=>'RolesController@view_permissions']);
    Route::post('/update_permissions', ['as'=>'update_permissions','uses'=>'RolesController@update_permissions']);



});


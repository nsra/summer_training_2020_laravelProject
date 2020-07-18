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
//Route::group(['prefix' => LaravelLocalization::setLocale(),
//    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//    ], function(){
//dd(LaravelLocalization::getSupportedLocales());
    Route::get('/', function () {
            return view('welcome');
        });

    Auth::routes();

    Route::get('/language/{lang?}', [
        'as' => 'language.change',
        'uses' => 'LocalizationController@change'
    ]);

    //these routes should be first, then we but permission routes
    Route::get('/multiguard_login', 'Auth\LoginController@showLoginForm')->name('show.multiguard_login');

    Route::get('/register/user', 'Auth\RegisterController@showUserRegisterForm')->name('user_register');

    Route::get('/user', 'UserController@userDashboard')->name('user_dashboard');

    Route::get('/admin', 'AdminController@adminDashboard')->name('admin_dashboard');

    Route::get('/home', 'HomeController@index')->name('home');

    Route::post('/multiguard_login', 'Auth\LoginController@multiguardLogin')->name('multiguard_login');

    Route::post('/register/user', 'Auth\RegisterController@createUser')->name('user_register');



    //Route::resource('articles', 'ArticlesController');
    Route::get('/articles', ['as' => 'articles.index', 'uses' => 'ArticlesController@index'])->middleware('can:read articles');
    Route::post('/articles', ['as' => 'articles.store', 'uses' => 'ArticlesController@store'])->middleware('can:create articles');
    Route::get('/articles/create', ['as' => 'articles.create', 'uses' => 'ArticlesController@create'])->middleware('can:create articles');
    Route::put('/articles/{article}', ['as' => 'articles.update', 'uses' => 'ArticlesController@update'])->middleware('can:edit articles');
    Route::get('/articles/{article}', ['as' => 'articles.show', 'uses' => 'ArticlesController@show'])->middleware('can:read articles');
    Route::get('/articles/{article}/edit', ['as' => 'articles.edit', 'uses' => 'ArticlesController@edit'])->middleware('can:edit articles');

    //Route::resource('service_types', 'Service_typesController');
    Route::get('/service_types', ['as' => 'service_types.index', 'uses' => 'Service_typesController@index'])->middleware('can:read service types');
    Route::post('/service_types', ['as' => 'service_types.store', 'uses' => 'Service_typesController@store'])->middleware('can:create service types');
    Route::get('/service_types/create', ['as' => 'service_types.create', 'uses' => 'Service_typesController@create'])->middleware('can:create service types');
    Route::put('/service_types/{service_type}', ['as' => 'service_types.update', 'uses' => 'Service_typesController@update'])->middleware('can:edit service types');
    Route::get('/service_types/{service_type}', ['as' => 'service_types.show', 'uses' => 'Service_typesController@show'])->middleware('can:read service types');
    Route::get('/service_types/{service_type}/edit', ['as' => 'service_types.edit', 'uses' => 'Service_typesController@edit'])->middleware('can:edit service types');


    //Route::resource('projects', 'ProjectsController');
    Route::get('/projects', ['as' => 'projects.index', 'uses' => 'ProjectsController@index']);
    Route::post('/projects', ['as' => 'projects.store', 'uses' => 'ProjectsController@store']);
    Route::get('/projects/create', ['as' => 'projects.create', 'uses' => 'ProjectsController@create']);
    Route::put('/projects/{project}', ['as' => 'projects.update', 'uses' => 'ProjectsController@update']);
    Route::get('/projects/{project}', ['as' => 'projects.show', 'uses' => 'ProjectsController@show']);
    Route::get('/projects/{project}/edit', ['as' => 'projects.edit', 'uses' => 'ProjectsController@edit']);

    //Route::resource('client_reviews', 'Client_reviewsController');
    Route::get('/client_reviews', ['as' => 'client_reviews.index', 'uses' => 'Client_reviewsController@index'])->middleware('can:read client reviews');
    Route::post('/client_reviews', ['as' => 'client_reviews.store', 'uses' => 'Client_reviewsController@store'])->middleware('can:create client reviews');
    Route::get('/client_reviews/create', ['as' => 'client_reviews.create', 'uses' => 'Client_reviewsController@create'])->middleware('can:create client reviews');
    Route::put('/client_reviews/{client_review}', ['as' => 'client_reviews.update', 'uses' => 'Client_reviewsController@update'])->middleware('can:edit client reviews');
    Route::get('/client_reviews/{client_review}', ['as' => 'client_reviews.show', 'uses' => 'Client_reviewsController@show'])->middleware('can:read client reviews');
    Route::get('/client_reviews/{client_review}/edit', ['as' => 'client_reviews.edit', 'uses' => 'Client_reviewsController@edit'])->middleware('can:edit client reviews');

    //Route::resource('teams', 'TeamsController');
    Route::get('/teams', ['as' => 'teams.index', 'uses' => 'TeamsController@index'])->middleware('can:read teams');
    Route::post('/teams', ['as' => 'teams.store', 'uses' => 'TeamsController@store'])->middleware('can:create teams');
    Route::get('/teams/create', ['as' => 'teams.create', 'uses' => 'TeamsController@create'])->middleware('can:create teams');
    Route::put('/teams/{team}', ['as' => 'teams.update', 'uses' => 'TeamsController@update'])->middleware('can:edit teams');
    Route::get('/teams/{team}', ['as' => 'teams.show', 'uses' => 'TeamsController@show'])->middleware('can:read teams');
    Route::get('/teams/{team}/edit', ['as' => 'teams.edit', 'uses' => 'TeamsController@edit'])->middleware('can:edit teams');


    //Route::resource('users', 'UsersController');
    Route::get('/users', ['as' => 'users.index', 'uses' => 'UsersController@index'])->middleware('can:read users');

    //Route::resource('company_features', 'company_featuresController');
    Route::get('/company_features', ['as' => 'company_features.index', 'uses' => 'company_featuresController@index']);//->middleware('can:read company_features');
    Route::post('/company_features', ['as' => 'company_features.store', 'uses' => 'company_featuresController@store'])->middleware('can:create company_features');
    Route::get('/company_features/create', ['as' => 'company_features.create', 'uses' => 'company_featuresController@create'])->middleware('can:create company_features');
    Route::put('/company_features/{company_feature}', ['as' => 'company_features.update', 'uses' => 'company_featuresController@update'])->middleware('can:edit company_features');
    Route::get('/company_features/{company_feature}', ['as' => 'company_features.show', 'uses' => 'company_featuresController@show'])->middleware('can:read company_features');
    Route::get('/company_features/{company_feature}/edit', ['as' => 'company_features.edit', 'uses' => 'company_featuresController@edit'])->middleware('can:edit company_features');

    //Route::resource('admins', 'AdminsController');

    //Route::group(['middleware' => ['permission:read admis']], function(){
        Route::get('/admins', ['as' => 'admins.index', 'uses' => 'AdminsController@index']);
    //});

    Route::post('/admins', ['as' => 'admins.store', 'uses' => 'AdminsController@store'])->middleware('can:create admins');
    Route::get('/admins/create', ['as' => 'admins.create', 'uses' => 'AdminsController@create'])->middleware('can:create admins');
    Route::put('/admins/{admin}', ['as' => 'admins.update', 'uses' => 'AdminsController@update'])->middleware('can:edit admins');
    Route::get('/admins/{admin}', ['as' => 'admins.show', 'uses' => 'AdminsController@show'])->middleware('can:read admins');
    Route::get('/admins/{admin}/edit', ['as' => 'admins.edit', 'uses' => 'AdminsController@edit'])->middleware('can:edit admins');

    //Route::resource('permissions', 'PermissionsController');
    Route::get('/permissions', ['as' => 'permissions.index', 'uses' => 'PermissionsController@index'])->middleware('can:read permissions');
    Route::post('/permissions', ['as' => 'permissions.store', 'uses' => 'PermissionsController@store'])->middleware('can:create permissions');
    Route::get('/permissions/create', ['as' => 'permissions.create', 'uses' => 'PermissionsController@create'])->middleware('can:create permissions');
    Route::put('/permissions/{permission}', ['as' => 'permissions.update', 'uses' => 'PermissionsController@update'])->middleware('can:edit permissions');
    Route::get('/permissions/{permission}', ['as' => 'permissions.show', 'uses' => 'PermissionsController@show'])->middleware('can:read permissions');
    Route::get('/permissions/{permission}/edit', ['as' => 'permissions.edit', 'uses' => 'PermissionsController@edit'])->middleware('can:edit permissions');

    //Route::resource('roles', 'RolesController');
    Route::get('/roles', ['as' => 'roles.index', 'uses' => 'RolesController@index'])->middleware('can:read roles');
    Route::post('/roles', ['as' => 'roles.store', 'uses' => 'RolesController@store'])->middleware('can:create roles');
    Route::get('/roles/create', ['as' => 'roles.create', 'uses' => 'RolesController@create'])->middleware('can:create roles');
    Route::put('/roles/{role}', ['as' => 'roles.update', 'uses' => 'RolesController@update'])->middleware('can:edit roles');
    Route::get('/roles/{role}', ['as' => 'roles.show', 'uses' => 'RolesController@show'])->middleware('can:read roles');
    Route::get('/roles/{role}/edit', ['as' => 'roles.edit', 'uses' => 'RolesController@edit'])->middleware('can:edit roles');


    Route::get('/logout/custom', ['as' => 'logout.custom', 'uses' => 'Controller@userLogout']);
    Route::get('/destroy/{id?}', ['as' => 'article.destroy', 'uses' => 'ArticlesController@destroy'])->middleware('can:delete articles');
    Route::get('/role/{id?}', ['as' => 'role.destroy', 'uses' => 'RolesController@destroy'])->middleware('can:delete roles');
    Route::get('/permission/{id?}', ['as' => 'permission.destroy', 'uses' => 'PermissionsController@destroy'])->middleware('can:delete permissions');
    Route::get('/project/{id?}', ['as' => 'project.destroy', 'uses' => 'ProjectsController@destroy'])->middleware('can:delete projects');
    Route::get('/service_type/{id?}', ['as' => 'service_type.destroy', 'uses' => 'Service_typesController@destroy'])->middleware('can:delete service types');
    Route::get('/team/{id?}', ['as' => 'team.destroy', 'uses' => 'TeamsController@destroy'])->middleware('can:delete teams');
    Route::get('/client_review/{id?}', ['as' => 'client_review.destroy', 'uses' => 'Client_reviewsController@destroy'])->middleware('can:delete client reviews');
    Route::get('/company_feature/{id?}', ['as' => 'company_feature.destroy', 'uses' => 'Company_featuresController@destroy'])->middleware('can:delete company feature');
    Route::get('/user/{id?}', ['as' => 'user.destroy', 'uses' => 'UsersController@destroy']);
    Route::get('/admin/{id?}', ['as' => 'admin.destroy', 'uses' => 'AdminsController@destroy'])->middleware('can:delete admins');
    Route::get('/permission/{id?}', ['as' => 'permission.destroy', 'uses' => 'PermissionsController@destroy'])->middleware('can:delete permissions');
    ////////////
    Route::get('cms/admins/permissions/{id}', ['as' => 'admin.view_permissions', 'uses' => 'AdminsController@view_permissions']);
    Route::post('/update/admin/permissions', ['as'=>'update_admin_permissions','uses'=>'AdminsController@update_admin_permissions']);
    Route::post('/permissionbyrole', ['as'=>'get_permissions_by_role','uses'=>'AdminsController@get_permissions_by_role']);
    Route::get('/viewpermissions/role/{id}', ['as'=>'role.view_permissions','uses'=>'RolesController@view_permissions']);
    ///////////
    Route::put('/update_permissions', ['as'=>'update_permissions','uses'=>'RolesController@update_permissions']);

    Route::put('/admin_changepassword', ['as'=>'admin_password.update','uses'=>'AdminController@update_admin_password']);
    Route::put('/admin_editprofile', ['as'=>'admin_profile.update','uses'=>'AdminController@update_admin_profile']);
    Route::get('/admin_editprofile', ['as' => 'admin_profile.edit', 'uses' => 'AdminController@edit_admin_profile']);
    Route::get('/admin_changepassword', ['as' => 'admin_password.change', 'uses' => 'AdminController@change_admin_password']);

    Route::put('/user_changepassword', ['as'=>'user_password.update','uses'=>'UserController@update_user_password']);
    Route::put('/user_editprofile', ['as'=>'user_profile.update','uses'=>'UserController@update_user_profile']);
    Route::get('/user_editprofile', ['as' => 'user_profile.edit', 'uses' => 'UserController@edit_user_profile']);
    Route::get('/user_changepassword', ['as' => 'user_password.change', 'uses' => 'UserController@change_user_password']);

//});

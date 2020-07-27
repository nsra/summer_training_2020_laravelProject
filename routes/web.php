<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you permission register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::group(['prefix' => LaravelLocalization::setLocale(),
//    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//    ], function(){
//dd(LaravelLocalization::getSupportedLocales());
    // Route::get('/', function () {
    //         return view('home');
    //     });

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


    // //Route::resource('articles', 'ArticlesController');
    // Route::get('/articles', ['as' => 'articles.index', 'uses' => 'ArticlesController@index'])->middleware('permission:read articles');
    // Route::post('/articles', ['as' => 'articles.store', 'uses' => 'ArticlesController@store'])->middleware('permission:create articles');
    // Route::get('/articles/create', ['as' => 'articles.create', 'uses' => 'ArticlesController@create'])->middleware('permission:create articles');
    // Route::put('/articles/{article}', ['as' => 'articles.update', 'uses' => 'ArticlesController@update'])->middleware('permission:edit articles');
    // Route::get('/articles/{article}', ['as' => 'articles.show', 'uses' => 'ArticlesController@show'])->middleware('permission:read articles');
    // Route::get('/articles/{article}/edit', ['as' => 'articles.edit', 'uses' => 'ArticlesController@edit'])->middleware('permission:edit articles');

    // //Route::resource('service_types', 'Service_typesController');
    // Route::get('/service_types', ['as' => 'service_types.index', 'uses' => 'Service_typesController@index'])->middleware('permission:read service types');
    // Route::post('/service_types', ['as' => 'service_types.store', 'uses' => 'Service_typesController@store'])->middleware('permission:create service types');
    // Route::get('/service_types/create', ['as' => 'service_types.create', 'uses' => 'Service_typesController@create'])->middleware('permission:create service types');
    // Route::put('/service_types/{service_type}', ['as' => 'service_types.update', 'uses' => 'Service_typesController@update'])->middleware('permission:edit service types');
    // Route::get('/service_types/{service_type}', ['as' => 'service_types.show', 'uses' => 'Service_typesController@show'])->middleware('permission:read service types');
    // Route::get('/service_types/{service_type}/edit', ['as' => 'service_types.edit', 'uses' => 'Service_typesController@edit'])->middleware('permission:edit service types');

    // //Route::resource('projects', 'ProjectsController');
    // Route::get('/projects', ['as' => 'projects.index', 'uses' => 'ProjectsController@index'])->middleware('permission:read projects');
    // Route::post('/projects', ['as' => 'projects.store', 'uses' => 'ProjectsController@store'])->middleware('permission:create projects');
    // Route::get('/projects/create', ['as' => 'projects.create', 'uses' => 'ProjectsController@create'])->middleware('permission:create projects');
    // Route::put('/projects/{project}', ['as' => 'projects.update', 'uses' => 'ProjectsController@update'])->middleware('permission:edit projects');
    // Route::get('/projects/{project}', ['as' => 'projects.show', 'uses' => 'ProjectsController@show'])->middleware('permission:read projects');
    // Route::get('/projects/{project}/edit', ['as' => 'projects.edit', 'uses' => 'ProjectsController@edit'])->middleware('permission:edit projects');

    // //Route::resource('client_reviews', 'Client_reviewsController');
    // Route::get('/client_reviews', ['as' => 'client_reviews.index', 'uses' => 'Client_reviewsController@index'])->middleware('permission:read client reviews');
    // Route::post('/client_reviews', ['as' => 'client_reviews.store', 'uses' => 'Client_reviewsController@store'])->middleware('permission:create client reviews');
    // Route::get('/client_reviews/create', ['as' => 'client_reviews.create', 'uses' => 'Client_reviewsController@create'])->middleware('permission:create client reviews');
    // Route::put('/client_reviews/{client_review}', ['as' => 'client_reviews.update', 'uses' => 'Client_reviewsController@update'])->middleware('permission:edit client reviews');
    // Route::get('/client_reviews/{client_review}', ['as' => 'client_reviews.show', 'uses' => 'Client_reviewsController@show'])->middleware('permission:read client reviews');
    // Route::get('/client_reviews/{client_review}/edit', ['as' => 'client_reviews.edit', 'uses' => 'Client_reviewsController@edit'])->middleware('permission:edit client reviews');

    // //Route::resource('teams', 'TeamsController');
    // Route::get('/teams', ['as' => 'teams.index', 'uses' => 'TeamsController@index'])->middleware('permission:read teams');
    // Route::post('/teams', ['as' => 'teams.store', 'uses' => 'TeamsController@store'])->middleware('permission:create teams');
    // Route::get('/teams/create', ['as' => 'teams.create', 'uses' => 'TeamsController@create'])->middleware('permission:create teams');
    // Route::put('/teams/{team}', ['as' => 'teams.update', 'uses' => 'TeamsController@update'])->middleware('permission:edit teams');
    // Route::get('/teams/{team}', ['as' => 'teams.show', 'uses' => 'TeamsController@show'])->middleware('permission:read teams');
    // Route::get('/teams/{team}/edit', ['as' => 'teams.edit', 'uses' => 'TeamsController@edit'])->middleware('permission:edit teams');


    // //Route::resource('users', 'UsersController');
    // Route::get('/users', ['as' => 'users.index', 'uses' => 'UsersController@index'])->middleware('permission:read users');

    // //Route::resource('company_features', 'company_featuresController');
    // Route::get('/company_features', ['as' => 'company_features.index', 'uses' => 'company_featuresController@index']);//->middleware('permission:read company_features');
    // Route::post('/company_features', ['as' => 'company_features.store', 'uses' => 'company_featuresController@store'])->middleware('permission:create company_features');
    // Route::get('/company_features/create', ['as' => 'company_features.create', 'uses' => 'company_featuresController@create'])->middleware('permission:create company_features');
    // Route::put('/company_features/{company_feature}', ['as' => 'company_features.update', 'uses' => 'company_featuresController@update'])->middleware('permission:edit company_features');
    // Route::get('/company_features/{company_feature}', ['as' => 'company_features.show', 'uses' => 'company_featuresController@show'])->middleware('permission:read company_features');
    // Route::get('/company_features/{company_feature}/edit', ['as' => 'company_features.edit', 'uses' => 'company_featuresController@edit'])->middleware('permission:edit company_features');

    // //Route::resource('admins', 'AdminsController');

    // //Route::group(['middleware' => ['permission:read admis']], function(){
    //     Route::get('/admins', ['as' => 'admins.index', 'uses' => 'AdminsController@index']);
    // //});

    // Route::post('/admins', ['as' => 'admins.store', 'uses' => 'AdminsController@store'])->middleware('permission:create admins');
    // Route::get('/admins/create', ['as' => 'admins.create', 'uses' => 'AdminsController@create'])->middleware('permission:create admins');
    // Route::put('/admins/{admin}', ['as' => 'admins.update', 'uses' => 'AdminsController@update'])->middleware('permission:edit admins');
    // Route::get('/admins/{admin}', ['as' => 'admins.show', 'uses' => 'AdminsController@show'])->middleware('permission:read admins');
    // Route::get('/admins/{admin}/edit', ['as' => 'admins.edit', 'uses' => 'AdminsController@edit'])->middleware('permission:edit admins');

    // //Route::resource('permissions', 'PermissionsController');
    // Route::get('/permissions', ['as' => 'permissions.index', 'uses' => 'PermissionsController@index'])->middleware('permission:read permissions');
    // Route::post('/permissions', ['as' => 'permissions.store', 'uses' => 'PermissionsController@store'])->middleware('permission:create permissions');
    // Route::get('/permissions/create', ['as' => 'permissions.create', 'uses' => 'PermissionsController@create'])->middleware('permission:create permissions');
    // Route::put('/permissions/{permission}', ['as' => 'permissions.update', 'uses' => 'PermissionsController@update'])->middleware('permission:edit permissions');
    // Route::get('/permissions/{permission}', ['as' => 'permissions.show', 'uses' => 'PermissionsController@show'])->middleware('permission:read permissions');
    // Route::get('/permissions/{permission}/edit', ['as' => 'permissions.edit', 'uses' => 'PermissionsController@edit'])->middleware('permission:edit permissions');

    // //Route::resource('roles', 'RolesController');
    // Route::get('/roles', ['as' => 'roles.index', 'uses' => 'RolesController@index'])->middleware('permission:read roles');
    // Route::post('/roles', ['as' => 'roles.store', 'uses' => 'RolesController@store'])->middleware('permission:create roles');
    // Route::get('/roles/create', ['as' => 'roles.create', 'uses' => 'RolesController@create'])->middleware('permission:create roles');
    // Route::put('/roles/{role}', ['as' => 'roles.update', 'uses' => 'RolesController@update'])->middleware('permission:edit roles');
    // Route::get('/roles/{role}', ['as' => 'roles.show', 'uses' => 'RolesController@show'])->middleware('permission:read roles');
    // Route::get('/roles/{role}/edit', ['as' => 'roles.edit', 'uses' => 'RolesController@edit'])->middleware('permission:edit roles');


    // Route::get('/logout/custom', ['as' => 'logout.custom', 'uses' => 'Controller@userLogout']);
    // Route::get('/destroy/{id?}', ['as' => 'article.destroy', 'uses' => 'ArticlesController@destroy'])->middleware('permission:delete articles');
    // Route::get('/role/{id?}', ['as' => 'role.destroy', 'uses' => 'RolesController@destroy'])->middleware('permission:delete roles');
    // Route::get('/permission/{id?}', ['as' => 'permission.destroy', 'uses' => 'PermissionsController@destroy'])->middleware('permission:delete permissions');
    // Route::get('/project/{id?}', ['as' => 'project.destroy', 'uses' => 'ProjectsController@destroy']);
    // Route::get('/service_type/{id?}', ['as' => 'service_type.destroy', 'uses' => 'Service_typesController@destroy'])->middleware('permission:delete service types');
    // Route::get('/team/{id?}', ['as' => 'team.destroy', 'uses' => 'TeamsController@destroy'])->middleware('permission:delete teams');
    // Route::get('/client_review/{id?}', ['as' => 'client_review.destroy', 'uses' => 'Client_reviewsController@destroy'])->middleware('permission:delete client reviews');
    // Route::get('/company_feature/{id?}', ['as' => 'company_feature.destroy', 'uses' => 'Company_featuresController@destroy'])->middleware('permission:delete company feature');
    // Route::get('/user/{id?}', ['as' => 'user.destroy', 'uses' => 'UsersController@destroy']);
    // Route::get('/admin/{id?}', ['as' => 'admin.destroy', 'uses' => 'AdminsController@destroy'])->middleware('permission:delete admins');
    // Route::get('/permission/{id?}', ['as' => 'permission.destroy', 'uses' => 'PermissionsController@destroy'])->middleware('permission:delete permissions');

    // Route::get('cms/admins/permissions/{id}', ['as' => 'admin.view_permissions', 'uses' => 'AdminsController@view_permissions']);
    // Route::post('/update/admin/permissions', ['as'=>'update_admin_permissions','uses'=>'AdminsController@update_admin_permissions']);
    // Route::post('/permissionbyrole', ['as'=>'get_permissions_by_role','uses'=>'AdminsController@get_permissions_by_role']);
    // Route::get('/viewpermissions/role/{id}', ['as'=>'role.view_permissions','uses'=>'RolesController@view_permissions']);

    // Route::put('/update_permissions', ['as'=>'update_permissions','uses'=>'RolesController@update_permissions']);

    // Route::put('/admin_changepassword', ['as'=>'admin_password.update','uses'=>'AdminController@update_admin_password']);
    // Route::put('/admin_editprofile', ['as'=>'admin_profile.update','uses'=>'AdminController@update_admin_profile']);
    // Route::get('/admin_editprofile', ['as' => 'admin_profile.edit', 'uses' => 'AdminController@edit_admin_profile']);
    // Route::get('/admin_changepassword', ['as' => 'admin_password.change', 'uses' => 'AdminController@change_admin_password']);

    // Route::put('/user_changepassword', ['as'=>'user_password.update','uses'=>'UserController@update_user_password']);
    // Route::put('/user_editprofile', ['as'=>'user_profile.update','uses'=>'UserController@update_user_profile']);
    // Route::get('/user_editprofile', ['as' => 'user_profile.edit', 'uses' => 'UserController@edit_user_profile']);
    // Route::get('/user_changepassword', ['as' => 'user_password.change', 'uses' => 'UserController@change_user_password']);

//});

//Route::resource('articles', 'ArticlesController');

    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@home']);

    Route::get('/blogs', ['as' => 'blogs', 'uses' => 'HomeController@blogs']);
    Route::get('/clientreviews', ['as' => 'clientreviews', 'uses' => 'HomeController@client_reviews']);
    Route::get('/workingteam', ['as' => 'workingteam', 'uses' => 'HomeController@working_team']);
    Route::get('/about_us', ['as' => 'about_us', 'uses' => 'HomeController@about_us']);

    Route::get('/articles', ['as' => 'articles.index', 'uses' => 'ArticlesController@index']);
    Route::post('/articles', ['as' => 'articles.store', 'uses' => 'ArticlesController@store']);
    Route::get('/articles/create', ['as' => 'articles.create', 'uses' => 'ArticlesController@create']);
    Route::put('/articles/{article}', ['as' => 'articles.update', 'uses' => 'ArticlesController@update']);
    Route::get('/articles/{article}', ['as' => 'articles.show', 'uses' => 'ArticlesController@show']);
    Route::get('/articles/{article}/edit', ['as' => 'articles.edit', 'uses' => 'ArticlesController@edit']);

    //Route::resource('service_types', 'Service_typesController');
    Route::get('/service_types', ['as' => 'service_types.index', 'uses' => 'Service_typesController@index']);
    Route::post('/service_types', ['as' => 'service_types.store', 'uses' => 'Service_typesController@store']);
    Route::get('/service_types/create', ['as' => 'service_types.create', 'uses' => 'Service_typesController@create']);
    Route::put('/service_types/{service_type}', ['as' => 'service_types.update', 'uses' => 'Service_typesController@update']);
    Route::get('/service_types/{service_type}', ['as' => 'service_types.show', 'uses' => 'Service_typesController@show']);
    Route::get('/service_types/{service_type}/edit', ['as' => 'service_types.edit', 'uses' => 'Service_typesController@edit']);

    //Route::resource('projects', 'ProjectsController');
    Route::get('/projects', ['as' => 'projects.index', 'uses' => 'ProjectsController@index']);
    Route::post('/projects', ['as' => 'projects.store', 'uses' => 'ProjectsController@store']);
    Route::get('/projects/create', ['as' => 'projects.create', 'uses' => 'ProjectsController@create']);
    Route::put('/projects/{project}', ['as' => 'projects.update', 'uses' => 'ProjectsController@update']);
    Route::get('/projects/{project}', ['as' => 'projects.show', 'uses' => 'ProjectsController@show']);
    Route::get('/projects/{project}/edit', ['as' => 'projects.edit', 'uses' => 'ProjectsController@edit']);

    //Route::resource('client_reviews', 'Client_reviewsController');
    Route::get('/client_reviews', ['as' => 'client_reviews.index', 'uses' => 'Client_reviewsController@index']);
    Route::post('/client_reviews', ['as' => 'client_reviews.store', 'uses' => 'Client_reviewsController@store']);
    Route::get('/client_reviews/create', ['as' => 'client_reviews.create', 'uses' => 'Client_reviewsController@create']);
    Route::put('/client_reviews/{client_review}', ['as' => 'client_reviews.update', 'uses' => 'Client_reviewsController@update']);
    Route::get('/client_reviews/{client_review}', ['as' => 'client_reviews.show', 'uses' => 'Client_reviewsController@show']);
    Route::get('/client_reviews/{client_review}/edit', ['as' => 'client_reviews.edit', 'uses' => 'Client_reviewsController@edit']);

    //Route::resource('teams', 'TeamsController');
    Route::get('/teams', ['as' => 'teams.index', 'uses' => 'TeamsController@index']);
    Route::post('/teams', ['as' => 'teams.store', 'uses' => 'TeamsController@store']);
    Route::get('/teams/create', ['as' => 'teams.create', 'uses' => 'TeamsController@create']);
    Route::put('/teams/{team}', ['as' => 'teams.update', 'uses' => 'TeamsController@update']);
    Route::get('/teams/{team}', ['as' => 'teams.show', 'uses' => 'TeamsController@show']);
    Route::get('/teams/{team}/edit', ['as' => 'teams.edit', 'uses' => 'TeamsController@edit']);


    //Route::resource('users', 'UsersController');
    Route::get('/users', ['as' => 'users.index', 'uses' => 'UsersController@index'])->middleware('permission:read users');

    //Route::resource('company_features', 'company_featuresController');
    Route::get('/company_features', ['as' => 'company_features.index', 'uses' => 'company_featuresController@index']);
    Route::post('/company_features', ['as' => 'company_features.store', 'uses' => 'company_featuresController@store']);
    Route::get('/company_features/create', ['as' => 'company_features.create', 'uses' => 'company_featuresController@create']);
    Route::put('/company_features/{company_feature}', ['as' => 'company_features.update', 'uses' => 'company_featuresController@update']);
    Route::get('/company_features/{company_feature}', ['as' => 'company_features.show', 'uses' => 'company_featuresController@show']);
    Route::get('/company_features/{company_feature}/edit', ['as' => 'company_features.edit', 'uses' => 'company_featuresController@edit']);

    //Route::resource('admins', 'AdminsController');

    //Route::group(['middleware' => ['permission:read admis']], function(){
        Route::get('/admins', ['as' => 'admins.index', 'uses' => 'AdminsController@index']);
    //});

    Route::post('/admins', ['as' => 'admins.store', 'uses' => 'AdminsController@store']);
    Route::get('/admins/create', ['as' => 'admins.create', 'uses' => 'AdminsController@create']);
    Route::put('/admins/{admin}', ['as' => 'admins.update', 'uses' => 'AdminsController@update']);
    Route::get('/admins/{admin}', ['as' => 'admins.show', 'uses' => 'AdminsController@show']);
    Route::get('/admins/{admin}/edit', ['as' => 'admins.edit', 'uses' => 'AdminsController@edit']);

    //Route::resource('permissions', 'PermissionsController');
    Route::get('/permissions', ['as' => 'permissions.index', 'uses' => 'PermissionsController@index']);
    Route::post('/permissions', ['as' => 'permissions.store', 'uses' => 'PermissionsController@store']);
    Route::get('/permissions/create', ['as' => 'permissions.create', 'uses' => 'PermissionsController@create']);
    Route::put('/permissions/{permission}', ['as' => 'permissions.update', 'uses' => 'PermissionsController@update']);
    Route::get('/permissions/{permission}', ['as' => 'permissions.show', 'uses' => 'PermissionsController@show']);
    Route::get('/permissions/{permission}/edit', ['as' => 'permissions.edit', 'uses' => 'PermissionsController@edit']);

    //Route::resource('roles', 'RolesController');
    Route::get('/roles', ['as' => 'roles.index', 'uses' => 'RolesController@index']);
    Route::post('/roles', ['as' => 'roles.store', 'uses' => 'RolesController@store']);
    Route::get('/roles/create', ['as' => 'roles.create', 'uses' => 'RolesController@create']);
    Route::put('/roles/{role}', ['as' => 'roles.update', 'uses' => 'RolesController@update']);
    Route::get('/roles/{role}', ['as' => 'roles.show', 'uses' => 'RolesController@show']);
    Route::get('/roles/{role}/edit', ['as' => 'roles.edit', 'uses' => 'RolesController@edit']);


    Route::get('/logout/custom', ['as' => 'logout.custom', 'uses' => 'Controller@userLogout']);
    Route::get('/destroy/{id?}', ['as' => 'article.destroy', 'uses' => 'ArticlesController@destroy']);
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
    Route::get('/order_step/{id?}', ['as' => 'order_step.destroy', 'uses' => 'Order_stepsController@destroy']);


    Route::get('cms/admins/permissions/{id}', ['as' => 'admin.view_permissions', 'uses' => 'AdminsController@view_permissions']);
    Route::post('/update/admin/permissions', ['as'=>'update_admin_permissions','uses'=>'AdminsController@update_admin_permissions']);
    Route::post('/permissionbyrole', ['as'=>'get_permissions_by_role','uses'=>'AdminsController@get_permissions_by_role']);
    Route::get('/viewpermissions/role/{id}', ['as'=>'role.view_permissions','uses'=>'RolesController@view_permissions']);

    Route::put('/update_permissions', ['as'=>'update_permissions','uses'=>'RolesController@update_permissions']);

    Route::put('/admin_changepassword', ['as'=>'admin_password.update','uses'=>'AdminController@update_admin_password']);
    Route::put('/admin_editprofile', ['as'=>'admin_profile.update','uses'=>'AdminController@update_admin_profile']);
    Route::get('/admin_editprofile', ['as' => 'admin_profile.edit', 'uses' => 'AdminController@edit_admin_profile']);
    Route::get('/admin_changepassword', ['as' => 'admin_password.change', 'uses' => 'AdminController@change_admin_password']);

    Route::put('/user_changepassword', ['as'=>'user_password.update','uses'=>'UserController@update_user_password']);
    Route::put('/user_editprofile', ['as'=>'user_profile.update','uses'=>'UserController@update_user_profile']);
    Route::get('/user_editprofile', ['as' => 'user_profile.edit', 'uses' => 'UserController@edit_user_profile']);
    Route::get('/user_changepassword', ['as' => 'user_password.change', 'uses' => 'UserController@change_user_password']);


    Route::put('/company/{id}/update', ['as'=>'company.update','uses'=>'CompanyController@update']);

    Route::put('/company', ['as'=>'company.index','uses'=>'CompanyController@index']);

      //Route::resource('order_steps', 'Order_stepsController');
      Route::get('/order_steps', ['as' => 'order_steps.index', 'uses' => 'Order_stepsController@index']);
      Route::post('/order_steps', ['as' => 'order_steps.store', 'uses' => 'Order_stepsController@store']);
      Route::get('/order_steps/create', ['as' => 'order_steps.create', 'uses' => 'Order_stepsController@create']);
      Route::put('/order_steps/{order_step}', ['as' => 'order_steps.update', 'uses' => 'Order_stepsController@update']);
      Route::get('/order_steps/{order_step}', ['as' => 'order_steps.show', 'uses' => 'Order_stepsController@show']);
      Route::get('/order_steps/{order_step}/edit', ['as' => 'order_steps.edit', 'uses' => 'Order_stepsController@edit']);
  

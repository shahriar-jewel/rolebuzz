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

// Route::get('/', function () {
//     return view('login');
// });

Auth::routes();
// Frontend Routes
Route::get('/', 'Frontend\HomeController@home');
Route::get('event-highlight', 'Frontend\EventHighlightController@eventHighlight');
Route::get('event-details', 'Frontend\EventHighlightController@eventDetails');
Route::get('learning-center', 'Frontend\LearningCenterController@learningCenter');
Route::get('contact-us', 'Frontend\ContactUsController@contactUs');


Route::get('login/', 'Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@login');

Route::prefix('admin')->middleware(['RoleBuzz','auth'])->group(function(){
	Route::get('/', 'Admin\DashboardController@index')->name('admin_dashboard');
	Route::get('permissions', 'Admin\Role\PermissionsController@index')->name('permissions');
	Route::get('permissions/build/{id}', 'Admin\Role\PermissionsController@buildPermission')->name('build_permission');
	Route::post('permissions/set/{id}', 'Admin\Role\PermissionsController@setPermission');
	Route::get('permissions/create-group', 'Admin\Role\PermissionsController@create')->name('create_group');
	Route::resources([
       'permissions/menu'            => 'Admin\Role\MenuController',
       'customer'                    => 'Admin\CustomerController',
	]);

	// Routes for Datatable

	Route::get('menu-datatable-ajax', 'Admin\Role\MenuController@menuDatatableAjax')->name('menu-datatable-ajax');
    Route::get('customer-datatable-ajax', 'Admin\CustomerController@customerDatatableAjax')->name('customer-datatable-ajax');
});

Route::get('error401', 'Admin\DashboardController@unauthorized')->name('error401');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
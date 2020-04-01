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
Auth::routes();

Route::view('/', 'index')->name('index');

Route::get('/about', 'ViewsController@about')->name('about');

/**
 * Routes for Admin Panel
 */

Route::name('admin.')
	->middleware('role:admin@admin.com')
    ->namespace('Admin')
    ->prefix('admin')
    ->group(function () {

    	Route::view('/', 'admin.index');

		Route::prefix('masters')
			->name('masters.')
			->namespace('Masters')
			->group(function () {
		    	Route::resource('/', 'MasterController');
			});

		Route::prefix('schedule')
			->name('schedule.')
			->namespace('Schedule')
			->group(function () {
		    	Route::resource('/', 'ScheduleController');
			});

		Route::prefix('services')
			->name('services.')
			->namespace('Services')
			->group(function () {
		    	Route::resource('/', 'ServiceController');
			});

		Route::prefix('orders')
			->name('orders.')
			->namespace('Orders')
			->group(function () {
		    	Route::resource('/', 'OrderController');
			});
    });


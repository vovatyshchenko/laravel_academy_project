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

Route::get('/reservation', 'ReservationController@index')->name('reservation');

Route::get('/reservation/redirect', 'ReservationController@redirect')->name('reservation.redirect');

Route::get('/reservation/date', 'ReservationController@date')->name('reservation.date');

/**
 * Routes for Admin Panel
 */

Route::name('admin.')
	->middleware('role:admin@admin.com')
    ->namespace('Admin')
    ->prefix('admin')
    ->group(function () {

    	Route::view('/', 'admin.index');

		Route::namespace('Masters')
			->group(function () {
		    	Route::resource('masters', 'MasterController');
			});

		Route::namespace('Schedule')
			->group(function () {
		    	Route::resource('schedule', 'ScheduleController');
			});

		Route::namespace('Services')
			->group(function () {
		    	Route::resource('services', 'ServiceController');
			});

		Route::namespace('Orders')
			->group(function () {
		    	Route::resource('orders', 'OrderController');
			});

        Route::namespace('Positions')
            ->group(function () {
                Route::resource('positions', 'PositionController');
            });
    });


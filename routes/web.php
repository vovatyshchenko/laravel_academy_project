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
/**
 * Routes for Main pages
 */
Route::get('/', 'ViewsController@index')->name('index');
Route::get('/about', 'ViewsController@about')->name('about');
/**
 * Routes for Reservation
 */
Route::get('/reservation', 'ReservationController@index')->name('reservation')->middleware('auth');
Route::get('/reservation/redirect', 'ReservationController@redirect')->name('reservation.redirect')->middleware('auth');
Route::get('/reservation/step2', 'ReservationController@step2')->name('reservation.step2')->middleware('auth');
Route::post('/reservation/store', 'ReservationController@store')->name('reservation.store')->middleware('auth');
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

        Route::namespace('Sliders')
            ->group(function () {
                Route::resource('sliders', 'SliderController');
            });
    });

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

Route::get('/', 'ViewsController@index');
Route::get('/about', 'ViewsController@about');

/**
 * Routes for Admin Panel
 */
Route::prefix('admin')->middleware('role:admin@admin.com')
    ->group(function () {
        Route::resource('/', 'OrderController');
        Route::resource('staff', 'MasterController');
        Route::resource('services', 'ServiceController');
        Route::resource('schedule', 'ScheduleController');
    });

/*Route::resource('admin/staff', 'MasterController');
Route::resource('admin/services', 'ServiceController');
Route::resource('admin/schedule', 'ScheduleController');
Route::resource('admin', 'OrderController')->middleware('auth');*/

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', 'UserController');

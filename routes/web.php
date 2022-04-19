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

Route::group(['middleware' => ['web']], function () {
    /*(Route::GET('/', 'FE\DashboardController@dashboardEcommerce')->name('dashboard-ecommerce');

    */

    Route::GET('/', 'FE\HomeController@index');
    Route::GET('/home', 'FE\HomeController@index');
    Route::GET('/login', 'FE\LoginController@login');
    Route::get('/nde/inbox', 'FE\InboxController@index');
    Route::get('/nde/dashboard-ecommerce', 'FE\DashboardController@dashboardEcommerce');
    Route::get('/nde/role', 'FE\RoleController@index')->middleware('role:admin');
});

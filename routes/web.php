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
    Route::GET('/', 'FE\LoginController@index');
    Route::GET('login', 'FE\LoginController@login');

    Route::get('/nde/inbox', 'FE\InboxController@index');
    Route::get('/nde/role', 'FE\RoleController@index')->middleware('role:admin');
});

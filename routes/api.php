<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BE\LoginControllerAPI;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['middleware' => ['web']], function () {
    /* Login */
    Route::POST('login', 'BE\LoginControllerAPI@exe');
    Route::GET('logout', 'BE\LoginControllerAPI@logout');

    /* Role Management */
    Route::POST('role/dt', 'BE\RoleControllerAPI@dt');
    Route::GET('role/{id}', 'BE\RoleControllerAPI@getById');
    Route::POST('role', 'BE\RoleControllerAPI@save');
    Route::DELETE('role/{id}', 'BE\RoleControllerAPI@delete');
});

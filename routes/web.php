<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/users/index', [
    'as' => 'admin.users.index',
    'uses' => 'App\Http\Controllers\UserController@index',
]);

Route::post('admin/users/store', [
    'as' => 'admin.users.store',
    'uses' => 'App\Http\Controllers\UserController@store',
]);

Route::get('admin/users/create', [
    'as' => 'admin.users.create',
    'uses' => 'App\Http\Controllers\UserController@create',
]);

Route::get('admin/users/{user}', [
    'as' => 'admin.users.show',
    'uses' => 'App\Http\Controllers\UserController@show',
]);
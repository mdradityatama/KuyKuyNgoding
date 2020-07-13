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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/test/{text}", "TestController@index");
Route::get("/devtest", "TestController@dev");

Route::group(['prefix' => '/dashboard'], function () {
    Route::get("/", "DashboardController@index");    
    Route::get("/skill", "DashboardController@index");    
    Route::get("/certificate", "DashboardController@index");    
    Route::get("/experience", "DashboardController@index");
});
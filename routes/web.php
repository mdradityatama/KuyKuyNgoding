<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/test/{text}", "TestController@index");
Route::get("/devtest", "TestController@dev");

Route::group([
    'prefix' => '/dashboard',
    "middleware" => "auth"
], function () {
    Route::get("/", "DashboardController@index")->name("dashboard");    
    Route::get("/skill", "DashboardController@index");    
    Route::get("/certificate", "DashboardController@index");    
    Route::get("/experience", "DashboardController@index");
});
    
Route::get('/login', "AuthController@getLogin")->middleware("guest")->name("login");
Route::post('/login', "AuthController@postLogin");
Route::post('/logout', "AuthController@logout");
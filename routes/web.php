<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "HomeController@index");

Route::get("/test/{text}", "TestController@index");
Route::get("/devtest", "TestController@dev");

Route::group([
    'prefix' => '/dashboard',
    "middleware" => "auth"
], function () {
    Route::get("/", "DashboardController@index")->name("dashboard");    
    Route::get("/skill", "DashboardController@skill");    
    Route::get("/certificate", "DashboardController@index");    
    Route::get("/experience", "DashboardController@index");
    Route::get("/profile", "Dashboard\ProfileController@index");
});
    
Route::get('/login', "AuthController@getLogin")->middleware("guest")->name("login");
Route::post('/login', "AuthController@postLogin");
Route::post('/logout', "AuthController@logout");
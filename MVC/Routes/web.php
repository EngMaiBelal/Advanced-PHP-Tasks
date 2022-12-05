<?php

use Src\Http\Route;
use App\Controllers\HomeController;
use App\Controllers\LoginController;

// clouser
Route::get('profile', function(){
    echo "profile";
});
Route::post('/home/create',[HomeController::class, 'create']);

Route::get('/home',[HomeController::class, 'index']);
Route::get('login',[LoginController::class, 'login']);
Route::get('register','App\Controllers\LoginController@register');

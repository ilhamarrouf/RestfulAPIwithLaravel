<?php

use Illuminate\Http\Request;

Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');
Route::get('users', 'UserController@users');

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('users/profile', 'UserController@profile');
    Route::get('users/{id}', 'UserController@profileById');
    Route::post('post', 'PostController@add');
});

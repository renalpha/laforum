<?php

Route::group(['middleware' => 'web'], function () {

    Route::get('/', 'Exdeliver\Forum\Controllers\ForumController@getIndex');

    Route::get('/login', 'Exdeliver\Forum\Controllers\AuthenticationController@getLogin');
    Route::post('/login', 'Exdeliver\Forum\Controllers\AuthenticationController@login');

    Route::get('/register', 'Exdeliver\Forum\Controllers\AuthenticationController@getRegister');
    Route::post('/register', 'Exdeliver\Forum\Controllers\AuthenticationController@register');

    Route::group(['middleware' => 'auth'], function () {

        Route::group(['prefix' => 'user'], function () {
            Route::get('/logout', 'Exdeliver\Forum\Controllers\AuthenticationController@getLogout');
            Route::get('/profile', 'Exdeliver\Forum\Controllers\AuthenticationController@getProfile');
        });

    });

});
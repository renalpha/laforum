<?php

Route::get('/', 'Exdeliver\Forum\Controllers\ForumController@getIndex');

Route::get('/login', 'Exdeliver\Forum\Controllers\AuthenticationController@getLogin');
Route::post('/login', 'Exdeliver\Forum\Controllers\AuthenticationController@login');

Route::get('/register', 'Exdeliver\Forum\Controllers\AuthenticationController@getRegister');
Route::post('/register', 'Exdeliver\Forum\Controllers\AuthenticationController@register');
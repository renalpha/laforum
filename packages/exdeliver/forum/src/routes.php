<?php

Route::get('/', 'Exdeliver\Forum\Controllers\ForumController@getIndex');
Route::get('/test', function(){
    return 'foobar';
});

<?php

Route::get('/', 'PostController@index')->name('home');

Route::get('/posts/create', 'PostController@create')->name('postCreate');

Route::post('/posts', 'PostController@store');

Route::get('/posts/{post}', 'PostController@show')->name('postearPost');

Route::post('/posts/{post}/comments', 'CommentController@store')->name('addComment');

Route::get('/register', 'RegistrationController@create')->name('registerView');

Route::post('/register', 'RegistrationController@store')->name('registerUser');

Route::get('/login', 'SessionController@create')->name('loginView');

Route::post('/login', 'SessionController@store')->name('login');

Route::get('/logout', 'SessionController@destroy')->name('logout');



<?php

Route::get('/', 'PageController@home') ->name('home');
Route::get('/about','PageController@about' )->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact', 'PageController@store')->name('contact.store');
Route::get('/thanks/{name}', 'PageController@thanks')->name('thanks');
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    dd("You are not supposed to be here");
//    return ['Laravel' => app()->version()];
});


route::get('/auth/google/callback', function () {
    dd('http://127.0.0.1:8000/auth/google/callback');
});

require __DIR__.'/auth.php';

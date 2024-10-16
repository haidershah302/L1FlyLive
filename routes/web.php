<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    dd("You are not supposed to be here");
//    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';

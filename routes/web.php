<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    \App\Facades\Logger::log('Hello World');
});

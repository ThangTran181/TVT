<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ThuctapController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nsx', [ThuctapController::class, 'get_all']);
Route::get('/nsx/add', [ThuctapController::class, 'add']);

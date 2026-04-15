<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    return view('home');
});

Route::get('/chat', [MessageController::class, 'index']);
Route::post('/chat', [MessageController::class, 'store']);
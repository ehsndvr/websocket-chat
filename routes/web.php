<?php

use App\Http\Controllers\Chat\ChatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('chat');
})->name('chat');


Route::get('chat', function () {
    return view('index');
})->name('chat');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::post('login-user', [ChatController::class, 'login']);
Route::post('send-message', [ChatController::class, 'sendMessage']);

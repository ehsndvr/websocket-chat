<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Chat\ChatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('chat');
})->name('chat');


Route::get('chat', function () {
    return view('index');
})->name('chat');

Route::post('send-message', [ChatController::class, 'sendMessage']);
Route::post('create-group', [ChatController::class, 'createGroup']);
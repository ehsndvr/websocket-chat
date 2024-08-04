<?php

use App\Http\Controllers\ChatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GroupController;

Route::get('/groups', [GroupController::class, 'index']);

Route::post('/chat/send', [ChatController::class, 'sendMessage']);

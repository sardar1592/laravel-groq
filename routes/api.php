<?php

use App\Http\Controllers\ChatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/chat', [ChatController::class, '__invoke']);

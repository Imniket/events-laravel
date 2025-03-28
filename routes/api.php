<?php

use App\Http\Controllers\API\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::apiResource('events', EventController::class);
Route::get('/events', [EventController::class, 'index']);
Route::get('events/today', [EventController::class, 'today']);
Route::get('events/future', [EventController::class, 'future']);
Route::get('events/past', [EventController::class, 'past']);

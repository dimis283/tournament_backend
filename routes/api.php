<?php
use Illuminate\Support\Facades\Route;

Route::post('/register', [\App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function(){
        Route::apiResource('tournaments', \App\Http\Controllers\Api\TournamentController::class);
        Route::apiResource('results', \App\Http\Controllers\Api\ResultController::class);
        Route::post('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
    });


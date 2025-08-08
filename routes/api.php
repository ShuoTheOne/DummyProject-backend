<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::apiResource('orcs', App\Http\Controllers\Api\OrcController::class);
Route::get('/test', function () {
    return response()->json(['message' => 'API is working!']);
});

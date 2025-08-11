<?php

use App\Http\Controllers\Api\CategoryController;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\SystemSettingController;

Route::post('/login', [LoginController::class, 'login']);
/* Group Route */
Route::middleware('auth:sanctum')->group(function() {
    Route::get('/user', function (Request $request) {
    return $request->user();
});
    /* System_Setting Route */
    Route::apiResource('/system-settings', SystemSettingController::class)->only('index', 'update');
    /* Category Routes */
    Route::get('/categories/all', [CategoryController::class, 'allCategory']);
    Route::get('/categories/change-status/{id}', [CategoryController::class, 'status']);
    Route::apiResource('/categories', CategoryController::class);
});

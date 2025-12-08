<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/auth/token', [
    AuthController::class,
    'token'
]);

Route::post('/auth/revoke', [
    AuthController::class,
    'revoke'
])->middleware('auth:sanctum');

Route::prefix('/v1')->middleware('auth:sanctum')->group(function () {
    Route::apiResource('companies', CompanyController::class);
});

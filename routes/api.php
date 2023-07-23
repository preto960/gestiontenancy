<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    Route::apiResource('users', 'UserController');
}); */
Route::post('/users', [UserController::class, 'index'])->middleware(['auth:sanctum','CheckTLMode']);
Route::post('/user/{id}', [UserController::class, 'show'])->middleware(['auth:sanctum','CheckTLMode']);
Route::post('/register', [AuthController::class, 'register'])->middleware(['auth:sanctum','CheckTLMode']);
Route::get('/routes', [AuthController::class, 'routes'])->middleware(['CheckTLMode']);
Route::get('/config', [AuthController::class, 'config'])->middleware(['CheckTLMode']);
Route::post('/login', [AuthController::class, 'login'])->middleware('CheckTLMode');
Route::post('/logout', [AuthController::class, 'logout'])->middleware(['auth:sanctum','CheckTLMode']);
<?php

use App\Http\Controllers\TransctionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/transaction', [TransctionController::class, 'index']);
// Route::post('/transaction', [TransctionController::class, 'store']);
// Route::get('/transaction/{id}', [TransctionController::class, 'show']);
// Route::put('/transaction/{id}', [TransctionController::class, 'update']);
// Route::delete('/transaction/{id}', [TransctionController::class, 'destroy']);

Route::resource('/transaction', TransctionController::class)->except(['create', 'edit']);
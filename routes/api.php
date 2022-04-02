<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProgressController;

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

Route::get('/items', [ItemController::class, 'index']);
Route::prefix('/item')->group(function() {
  //Route::post('/store', [ItemController::class, 'store']);
  Route::put('/{id}', [ItemController::class, 'update']);
  Route::delete('/{id}', [ItemController::class, 'destroy']);
});

Route::get('/appointments', [AppointmentController::class, 'index']);
Route::get('/appointments/{id}/edit', [AppointmentController::class, 'edit']);
Route::prefix('/appointment')->group(function() {
  Route::post('/store', [AppointmentController::class, 'store']);
  Route::put('/{id}', [AppointmentController::class, 'update']);
  Route::delete('/{id}', [AppointmentController::class, 'destroy']);
});

Route::get('/drivers', [DriverController::class, 'index']);
Route::prefix('/driver')->group( function(){
    Route::post('/store', [DriverController::class, 'store']);
    Route::put('/{id}', [DriverController::class, 'update']);
    Route::delete('{id}', [DriverController::class, 'destroy']);
});

Route::get('clients', [ClientController::class, 'index']);
Route::prefix('client')->group( function() {
  Route::post('\store', [ClientController::class, 'store']);
  Route::put('\{id}', [ClientController::class, 'update']);
  Route::delete('\{id}', [ClientController::class, 'destroy']);
});

Route::get('progresses', [ProgressController::class, 'index']);
Route::prefix('progress')->group(function(){
  Route::post('/store', [ProgressController::class, 'store']);
  Route::put('/{id}', [ProgressController::class, 'update']);
  Route::delete('/{id}', [ProgressController::class, 'destroy']);
});

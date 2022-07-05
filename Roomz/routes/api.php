<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\GuestController;
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

Route::get('/', [RoomController::class, 'index']);
Route::get('/room/{room}', [RoomController::class, 'index']);
Route::post('room', [RoomController::class, 'store']);
Route::patch('/room/{room}', [RoomController::class, 'update']);
Route::delete('/room/{room}', [RoomController::class, 'destroy']);


Route::get('/seasons', [SeasonController::class, 'index']);
Route::get('/season/{season}', [SeasonController::class, 'show']);
Route::post('/season', [SeasonController::class, 'store']);
Route::delete('/season/{season}', [SeasonController::class, 'destroy']);
Route::patch('/season/{season}', [SeasonController::class, 'update']);

Route::get('/guests', [GuestController::class, 'index']);
Route::get('/guest/{guest}', [GuestController::class, 'show']);
Route::post('/guest', [GuestController::class, 'store']);


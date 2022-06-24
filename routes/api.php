<?php

use App\Http\Controllers\GledalacController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\AuthController;
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


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::get('/gledalac', [GledalacController::class, 'index']);
    Route::get('/gledalac/{id}', [GledalacController::class, 'show']);
    Route::post('/gledalac', [GledalacController::class, 'store']);
    Route::put('/gledalac/{id}', [GledalacController::class, 'update']);
    Route::delete('/gledalac/{id}', [GledalacController::class, 'destroy']);

    Route::get('/film', [FilmController::class, 'index']);
    Route::get('/film/{id}', [FilmController::class, 'show']);

    Route::post('/logout', [AuthController::class, 'logout']);
});


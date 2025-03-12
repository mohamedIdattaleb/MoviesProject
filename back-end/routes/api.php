<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\WatchHistoryController;
use App\Http\Controllers\UsersController;

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

// Public routes
Route::prefix('v1')->group(function () {
    Route::get('movies', [MoviesController::class, 'index']);
    Route::get('series', [SeriesController::class, 'index']);
    Route::get('genres', [GenresController::class, 'index']);
    Route::get('movies/{id}', [MoviesController::class, 'show']);
    Route::get('series/{id}', [SeriesController::class, 'show']);
    Route::post('register', [UsersController::class, 'register']);
    Route::post('login', [UsersController::class, 'login']);
});

// Authenticated routes
Route::middleware('auth:sanctum')->prefix('v1')->group(function () {
    Route::apiResource('movies', MoviesController::class)->except(['index']);
    Route::apiResource('series', SeriesController::class)->except(['index']);
    Route::apiResource('genres', GenresController::class)->except(['index']);
    Route::apiResource('favorites', FavoritesController::class);
    Route::apiResource('watch_histories', WatchHistoryController::class);
    Route::apiResource('users', UsersController::class);

    // Logout route
    Route::post('logout', [UsersController::class, 'logout']);
});
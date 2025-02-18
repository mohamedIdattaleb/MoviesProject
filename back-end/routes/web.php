<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\WatchHistoryController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home route
Route::get('/', function () {
    return view('welcome');
});

// Movie routes
Route::resource('movies', MoviesController::class);

// Series routes
Route::resource('series', SeriesController::class);

// Genre routes
Route::resource('genres', GenresController::class);

// Favorites routes
Route::resource('favorites', FavoritesController::class);

// Watch History routes
Route::resource('watch_histories', WatchHistoryController::class);

// User routes
Route::resource('users', UsersController::class);

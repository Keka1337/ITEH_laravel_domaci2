<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtPeriodController;
use App\Http\Controllers\PaintingController;
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

Route::resource('art_periods',ArtPeriodController::class);
Route::resource('/artists',ArtistController::class);
Route::resource('/paintings',PaintingController::class)->only(['show']);


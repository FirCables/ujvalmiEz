<?php

use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/restaurants', [RestaurantController::class, "index"]);
Route::get('/restaurants/{id}', [RestaurantController::class, "show"]);
Route::post("/reviews", [ReviewController::class, "store"]);

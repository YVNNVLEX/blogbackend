<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\articlesController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('articles', [articlesController::class, 'list']);
Route::post('articles', [articlesController::class, 'store']);

Route::post('register',[RegisteredUserController::class, 'store']);


Route::post('login',[AuthenticatedSessionController::class, 'store']);

Route::get('user',[RegisteredUserController::class, 'list']);

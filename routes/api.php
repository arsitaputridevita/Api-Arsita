<?php

use App\Http\Controllers\Api\AktorController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\FilmController;
use App\Http\Controllers\Api\GenreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KategoriController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// route / endopoint kategori

// Route::get('kategori',[KategoriController::class, 'index']);
// Route::post('kategori', [KategoriController::class, 'store']);
// Route::get('kategori/{id}', [KategoriController::class, 'show']);
// Route::put('kategori/{id}',[KategoriController::class, 'update']);
// Route::delete('kategori/{id}', [KategoriController::class, 'destroy']);

// route /enpoint genre


// Route::get('genre', [GenreController::class, 'index']);
// Route::post('genre', [GenreController::class, 'store']);
// Route::get('genre/{id}', [GenreController::class, 'show']);
// Route::put('genre/{id}', [GenreController::class, 'update']);
// Route::delete('genre/{id}', [GenreController::class, 'destroy']);

// route /endpoint Aktor

// auth route
Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::resource('kategori', KategoriController::class);
    Route::resource('genre', GenreController::class);
    Route::resource('aktor', GenreController::class);
     Route::resource('film', FilmController::class);
});
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


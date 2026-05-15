<?php

use App\Http\Controllers\Api\LibroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/Libros', [LibroController::class, 'index']);
Route::post('/Libros', [LibroController::class, 'store']);
Route::get('/Libros/{id}', [LibroController::class, 'show']);
Route::put('/Libros/{id}', [LibroController::class, 'update']);
Route::delete('/Libros/{id}', [LibroController::class, 'destroy']);

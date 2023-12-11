<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

//to function the book controller all at once

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/book', [BookController::class, 'books.index']);
    Route::get('/book/{id}', [BookController::class, 'books.show']);
    Route::post('/book', [BookController::class, 'books.store']);
    Route::get('/book/{id}', [BookController::class, 'books.show']);
});


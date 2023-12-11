<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [\App\Http\Controllers\MoviesController::class, 'index'])->name('movies.index');
Route::get('/movie', [\App\Http\Controllers\MoviesController::class, 'show'])->name('movies.show');

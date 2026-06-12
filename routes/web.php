<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('movies.index');
});

Route::get('/movies/search', [MovieController::class, 'search'])->name('movies.search');

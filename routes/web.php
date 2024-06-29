<?php

use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BasicController::class, 'welcome'])->name('welcome');
Route::get('/movies', [BasicController::class, 'movies'])->name('movies');
Route::get('/shorts', [BasicController::class, 'shorts'])->name('shorts');
Route::get('/tvshows', [BasicController::class, 'tvshows'])->name('tvshows');
Route::get('/videogames', [BasicController::class, 'videogames'])->name('videogames');
Route::get('/parkattractions', [BasicController::class, 'parkattractions'])->name('parkattractions');
Route::get('/cats', [BasicController::class, 'cats'])->name('cats');

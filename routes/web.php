<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// route PublicController
Route::get('/home',[PublicController::class, 'index'])->name('home');

// route MovieController
Route::get('/',[MovieController::class, 'index'])->name('movie.index');
Route::get('/movie/create',[MovieController::class, 'create'])->name('movie.create');

Route::post('/movie/store',[MovieController::class, 'store'])->name('movie.store');
Route::get('movie/show/{movie}',[MovieController::class, 'show'])->name('movie.show');

Route::get('movie/edit/{movie}',[MovieController::class, 'edit'])->name('movie.edit');
Route::put('movie/update/{movie}',[MovieController::class, 'update'])->name('movie.update');
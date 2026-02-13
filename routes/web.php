<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

// Routes pour la gestion des usagers
Route::get('/utilisateurs', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::get('/inscription', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
Route::post('/inscription', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('/utilisateur/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('user.show');
Route::get('/modifier/utilisateur/{user}/', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');


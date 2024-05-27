<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/postagem', function () {
    return view('postagem');
})->middleware(['auth'])->name('postagem');

Route::get('/pesquisa', function () {
    return view('pesquisa');
})->middleware(['auth'])->name('pesquisa');

Route::get('/confirmarPost', function () {
    return view('confirmarPost');
})->middleware(['auth'])->name('confirmarPost');

Route::get('/enviarPost', function () {
    return view('dashboard');
})->middleware(['auth'])->name('enviarPost');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



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
    return view('mustella-index');
})->middleware(['auth'])->name('enviarPost');

Route::middleware('auth')->group(function () {


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/mustella', [PostController::class, 'index'])->name('mustella');



    Route::get('/search', [App\Http\Controllers\PostController::class, 'search'])->name('posts.search');

});

require __DIR__.'/auth.php';

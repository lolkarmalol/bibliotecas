<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookCopyController;
use App\Http\Controllers\ShelfController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('users', UserController::class);
Route::resource('book-copies', BookCopyController::class);
Route::resource('authors', AuthorController::class);
Route::resource('shelves', ShelfController::class);
Route::resource('themes', ThemeController::class);
Route::resource('libraries', LibraryController::class);

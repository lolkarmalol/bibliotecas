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

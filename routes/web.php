<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    // return view('welcome');
    dd("evy");
});

Route::get("/home", [
    HomeController::class, 'show'
])->name('home');


Route::get("/library", [
    LibraryController::class, 'show'
])->name('library');

Route::get("/song", [
    SongsController::class, 'show'
])->name('song');

Route::get("/form", [
    FormController::class, 'show'
])->name('form');

Route::post("/form", [
    SongsController::class, 'store'
])->name('form.submit');
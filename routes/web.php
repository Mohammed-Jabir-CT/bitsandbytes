<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function (){
    return view('about');
})->name('about');
Route::resource('/stories', StoryController::class);
Route::resource('/subscribers', SubscriberController::class);
// Route::resource('/genres', GenreController::class);
Route::get('/genres-of-identity', [GenreController::class, 'getGenresOfIdentity'])->name('genres.ofIdentity');
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//anime detail-page route
Route::get('shows/show-detail/{id}', [App\Http\Controllers\Anime\AnimeController::class, 'animeDetails'])->name('anime.details');
// insert comment-page route
Route::post('shows/insert-comments/{id}', [App\Http\Controllers\Anime\AnimeController::class, 'insertComments'])->name('anime.insert.comment');
// following
Route::post('shows/follow/{id}', [App\Http\Controllers\Anime\AnimeController::class, 'follow'])->name('anime.follow');


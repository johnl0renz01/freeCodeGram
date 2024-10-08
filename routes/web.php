<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/p/create', [App\Http\Controllers\PostsController::class, 'create']);
Route::post('/p', [App\Http\Controllers\PostsController::class, 'store']);
Route::get('/p/{post}', [App\Http\Controllers\PostsController::class, 'show']);



Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::put('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

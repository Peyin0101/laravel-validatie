<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;


Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'handle'])->name('contact.handle');

Route::resource('posts', PostController::class);
Route::get('/posts/{post}/delete', [PostController::class, 'delete'])->name('posts.delete');
<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PostController::class,"index"] )->name("posts.index");
Route::get('/add',[PostController::class,"create"])->name("add.post");
Route::post('/',[PostController::class,"store"])->name("store.post");
Route::get('/post/{post}',[PostController::class,"show"])->name("show.post");
Route::get('/edit/{post}',[PostController::class,"edit"])->name("edit.post");
Route::put('/edit/{post}',[PostController::class,"update"])->name("update.post");
Route::delete('/{post}',[PostController::class,"destroy"])->name("destroy.post");
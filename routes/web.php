<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('page.index');
Route::get('/form', [PostController::class, 'create'])->name('form.page');
Route::post('/form', [PostController::class, 'store'])->name('form.store');
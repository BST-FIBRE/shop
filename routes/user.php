<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name( 'user.index');
Route::get('/modifier', [UserController::class, 'edit'])->name( 'user.edit');
Route::get('/compléter', [UserController::class, 'complete'])->name('user.complete');

Route::post('/update', [UserController::class, 'update'])->name('user.update');

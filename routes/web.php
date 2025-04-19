<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserControl;
Route::get('/', function () {
    return view('layouts.app');
})->middleware(['auth', 'verified'])->name('layouts.app');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [EventController::class, 'index']);
Route::resource('events', EventController::class);

Route::middleware('auth')->get('/user', [UserControl::class, 'show']);
//Route::middleware('auth')->get('/', [UserControl::class, 'usergreet']);
//Route::resource('users',UserControl::class);
require __DIR__.'/auth.php';

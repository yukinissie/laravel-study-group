<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Movie\IndexController;
use App\Http\Controllers\Admin\Movie\StoreController;
use App\Http\Controllers\Admin\Movie\CreateController;
use App\Http\Controllers\Admin\Movie\ShowController;
use App\Http\Controllers\Admin\Movie\UpdateController;
use App\Http\Controllers\Admin\Movie\DestroyController;
use App\Http\Controllers\Admin\Movie\EditController;

Route::get('', IndexController::class)->name('index');
Route::post('', StoreController::class)->name('store');
Route::get('/create', CreateController::class)->name('create');
Route::get('/{movie}', ShowController::class)->name('show');
Route::put('/{movie}', UpdateController::class)->name('update');
Route::delete('/{movie}', DestroyController::class)->name('destroy');
Route::get('/{movie}/edit', EditController::class)->name('edit');

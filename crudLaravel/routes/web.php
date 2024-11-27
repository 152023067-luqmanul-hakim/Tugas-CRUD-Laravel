<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/', [BukuController::class, 'index'])->name('index');
Route::get('/add', [BukuController::class, 'formAdd'])->name('add');
Route::post('/store', [BukuController::class, 'store'])->name('store');
Route::get('/edit/{isbn}', [BukuController::class, 'formEdit'])->name('edit');
Route::post('/update/{isbn}', [BukuController::class, 'update'])->name('update');
Route::post('/delete/{isbn}', [BukuController::class, 'delete'])->name('delete');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'posts', 'as' => 'posts.'], function() {
    Route::get('/',         [\App\Http\Controllers\PostController::class, 'index'])->name('index');
    Route::get('create',    [\App\Http\Controllers\PostController::class, 'create'])->name('create');
    Route::post('/',        [\App\Http\Controllers\PostController::class, 'store'])->name('store');
    Route::get('/{id}',     [\App\Http\Controllers\PostController::class, 'show'])->name('show');
    Route::get('/{id}/edit',[\App\Http\Controllers\PostController::class, 'edit'])->name('edit');
    Route::put('/{id}',     [\App\Http\Controllers\PostController::class, 'update'])->name('update');
    Route::delete('/{id}',  [\App\Http\Controllers\PostController::class, 'destroy'])->name('destroy');
});
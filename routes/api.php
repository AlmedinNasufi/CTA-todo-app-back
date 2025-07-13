<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::controller(TodoController::class)->prefix('todo')->group(function () {
    Route::get('/', 'index')->name('todos.index');
    Route::post('/', 'store')->name('todos.store');
    Route::put('/{todo}', 'complete')->name('todos.complete');
    Route::delete('/{todo}', 'destroy')->name('todos.destroy');

    // extra routes
    Route::get('/deleted', 'getDeletedTodos')->name('todos.deleted');
    Route::get('/all', 'getAllTodos')->name('todos.all');
    Route::put('/{id}/restore', 'restore')->name('todos.restore');
    Route::delete('/{id}/permanent-delete', 'forceDelete')->name('todos.force-delete');
});

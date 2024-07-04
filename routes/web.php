<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::resource('items', ItemController::class);

Route::get('/', [ItemController::class, 'index'])->name('index');
Route::get('/add', [ItemController::class, 'addView'])->name('add');
Route::get('/view/{item}', [ItemController::class, 'detailsView'])->name('view');
Route::get('/update/{item}', [ItemController::class, 'updateView'])->name('update');
Route::get('/delete/{id}', [ItemController::class, 'deleteView'])->name('delete');

Route::post('/addItem', [ItemController::class, 'add'])->name('addItem');
Route::post('/updateItem', [ItemController::class, 'update'])->name('updateItem');
Route::post('/deleteItem', [ItemController::class, 'delete'])->name('deleteItem');
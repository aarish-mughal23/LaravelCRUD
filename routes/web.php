<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("index");
Route::get('/add', function () {
    return view('add');
})->name("add");


<?php

use Illuminate\Support\Facades\Route;

// Route untuk Orang 3
Route::get('/categories', function () {
    return view('categories.index');
});

Route::get('/timeline', function () {
    return view('timeline.index');
});

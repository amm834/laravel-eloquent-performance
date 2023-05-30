<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::resource('/', HomeController::class);
Route::get('/search', [SearchController::class, 'search']);

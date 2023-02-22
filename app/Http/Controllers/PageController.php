<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PageController;
use Illuminate\Routing\Route;

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);


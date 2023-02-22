<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Routes Praktikum 1 ( Route / )
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return ('<h1>Selamat datang pada bagian Praktikum 1</h1>');
});

/*
|--------------------------------------------------------------------------
| Routes Praktikum 1 ( Route About )
|--------------------------------------------------------------------------
*/

Route::get('about', function () {
    return ('<h1>Tentang saya </h1> Wildan Hafidz Mauludin <br> TI - 2F NIM 2141720007</h1>');
});

/*
|--------------------------------------------------------------------------
| Routes Praktikum 1 ( Route Articles )
|--------------------------------------------------------------------------
*/

Route::get('articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/article/{id}', [ArticleController::class, 'article']);


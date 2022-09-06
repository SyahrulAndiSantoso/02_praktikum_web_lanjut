<?php

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
    echo "Selamat Datang";
});
Route::get('/about', function () {
    echo "Nama : Syahrul Riza Andi Santoso<br>
        Npm : 06.2019.1.07185<br>
        Kelas : Web Developer
    ";
});
Route::get('/articles/{id}', function ($id) {
    echo "Halaman Artikel Dengan ID $id";
});

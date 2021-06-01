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
    return view('pages/dashboard/dashboard');
})->name('Dashboard');

//Route Bahan Baku
Route::get('/bahan-baku', function () {
    return view('pages/bahan-baku/semua-bahan-baku');
})->name('Data Bahan Baku');
Route::get('/bahan-baku/detail', function () {
    return view('pages/bahan-baku/detail-bahan-baku');
})->name('Detail Bahan Baku');
Route::get('/bahan-baku/permintaan', function () {
    return view('pages/bahan-baku/permintaan-bahan-baku');
})->name('Permintaan Bahan Baku');

//Route Menu Makanan
Route::get('/menu-makanan', function () {
    return view('pages/menu-makanan/semua-menu-makanan');
})->name('Data Menu Makanan');
Route::get('/bahan-baku/detail', function () {
    return view('pages/bahan-baku/detail-bahan-baku');
})->name('Detail Bahan Baku');
Route::get('/bahan-baku/permintaan', function () {
    return view('pages/bahan-baku/permintaan-bahan-baku');
})->name('Permintaan Bahan Baku');

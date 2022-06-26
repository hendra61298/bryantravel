<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/travel-palembang-lampung', [HomeController::class, 'palembang'])->name('home.palembang');
Route::get('/bryan-travel', [HomeController::class, 'profil'])->name('home.profil');
Route::get('/travel-palembang-lampung-jakarta-bandung-bengkulu', [HomeController::class, 'rute'])->name('home.rute');
Route::get('/rental-mobil-lampung', [HomeController::class, 'rental'])->name('home.rental');
Route::get('/sitemap', [HomeController::class, 'sitemap'])->name('home.sitemap');

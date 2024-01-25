<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'login']);
Route::get('/dashboard', [HomeController::class, 'dashboard']);
Route::get('/user', [HomeController::class, 'index']);
Route::get('/create', [HomeController::class, 'create'])->name('create');
Route::get('/peminjaman', [HomeController::class, 'peminjaman']);
Route::get('/katalog', [HomeController::class, 'katalog']);
Route::get('/donasi', [HomeController::class, 'donasi']);
Route::get('/verifikasi', [HomeController::class, 'verifikasi']);
// Route::get('/login', [HomeController::class, 'login']);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

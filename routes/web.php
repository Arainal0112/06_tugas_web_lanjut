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

Route::get('/', [App\Http\Controllers\DashboardController::class, 'redirect']);

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/profil/{slug}', [App\Http\Controllers\StudentController::class, 'index'])->name('profil');

Route::get('/pengalaman-kuliah', [App\Http\Controllers\PengalamanKuliahController::class, 'index'])->name('pengalamanKuliah');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

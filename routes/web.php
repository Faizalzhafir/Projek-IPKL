<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login_proses',[LoginController::class, 'login_proses'])->name('login_proses');
Route::get('/dashboard',[LoginController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

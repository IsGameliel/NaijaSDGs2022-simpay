<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Escrow\TransactionController;


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

Route::get('/', [FrontController::class, 'index']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/services', [FrontController::class, 'services']);
Route::get('/contact', [FrontController::class, 'contact']);

Route::get('/escrow/home', [FrontController::class, 'escrow_page']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/escrow/start/transaction', [TransactionController::class, 'index']);

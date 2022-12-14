<?php

use App\Http\Controllers\FrontController;
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

Route::get('/auth/{any}', [FrontController::class, 'index'])->where('any', '.*')->name('lvs.auth');
Route::get('/', [FrontController::class, 'index'])->where('any', '.*')->name('lvs.home');
Route::get('/{any}', [FrontController::class, 'index'])->where('any', '.*')->name('lvs.home');

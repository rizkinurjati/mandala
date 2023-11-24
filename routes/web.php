<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\MagangController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::post('testimoni', [HomeController::class,'store'])->name('store.testimoni');
Route::resource('magang', MagangController::class);

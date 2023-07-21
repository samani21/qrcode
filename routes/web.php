<?php

use App\Http\Controllers\WelcomController;
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

Route::get('/scan', [WelcomController::class,'scan'])->name('scan');
Route::post('/validasi', [WelcomController::class,'validasi'])->name('validasi');

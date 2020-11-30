<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\AuthController;
use App\http\Controllers\ClientController;
use App\http\Controllers\ArtikelController;
use App\http\Controllers\UserController;

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

Route::get('login', [AuthController::class, 'showlogin'])->name('login');
Route::get('registrasi', [AuthController::class, 'registrasi']);
Route::post('registrasi', [AuthController::class, 'store']);
Route::post('login', [AuthController::class, 'loginprocess']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('client', [HomeController::class, 'client']);

Route::get('test/{produk}', [HomeController::class, 'test']);


Route::get('base', [HomeController::class, 'base']);
Route::get('client', [ClientController::class, 'client']);

Route::resource('artikel', ArtikelController::class);
Route::resource('user', UserController::class);




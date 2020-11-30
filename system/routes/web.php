<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\AuthController;
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


Route::get('base', [HomeController::class, 'base']);


Route::get('artikel', [ArtikelController::class, 'index']);
Route::get('artikel/create', [ArtikelController::class, 'create']);
Route::post('artikel', [ArtikelController::class, 'store']);
Route::get('artikel/{artikel}', [ArtikelController::class, 'show']);
Route::get('artikel/{artikel}/edit', [ArtikelController::class, 'edit']);
Route::put('artikel/{artikel}', [ArtikelController::class, 'update']);
Route::delete('artikel/{artikel}', [ArtikelController::class, 'destroy']);

Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{user}', [UserController::class, 'show']);
Route::get('user/{user}/edit', [UserController::class, 'edit']);
Route::put('user/{user}', [UserController::class, 'update']);
Route::delete('user/{user}', [UserController::class, 'destroy']);
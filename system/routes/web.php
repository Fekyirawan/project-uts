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
Route::post('login', [AuthController::class, 'loginprocess']);
Route::get('registrasi', [AuthController::class, 'registrasi']);
Route::post('registrasi', [AuthController::class, 'store']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('dashboard', [HomeController::class, 'dashboard']);


Route::prefix('admin')->middleware('auth')->group(function(){

Route::get('base', [HomeController::class, 'base']);
Route::resource('artikel', ArtikelController::class);
Route::resource('user', UserController::class);


});
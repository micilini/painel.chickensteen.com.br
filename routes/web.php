<?php

use Illuminate\Support\Facades\Route;

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

/* GET ROUTES */

Route::get('/', [\App\Http\Controllers\LoginController::class, 'login']);
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login']);

/* POST ROUTES */

Route::post('/data/newLogin', [\App\Http\Controllers\LoginController::class, 'newLogin']);
Route::post('/data/newCancel', [\App\Http\Controllers\DashboardController::class, 'newCancel']);

/* PRIVATE GROUP OF ROUTES */

Route::get('/reservas', [\App\Http\Controllers\DashboardController::class, 'reservas']);
Route::get('/usuarios', [\App\Http\Controllers\DashboardController::class, 'usuarios']);
Route::get('/contatos', [\App\Http\Controllers\DashboardController::class, 'contatos']);
Route::get('/versao-pro', [\App\Http\Controllers\DashboardController::class, 'versaoPro']);
Route::get('/sair', [\App\Http\Controllers\DashboardController::class, 'logout']);


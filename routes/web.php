<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdministradorController;

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

Route::get('/', [UsersController::class, 'index']);
Route::get('/crear_usuario', [UsersController::class, 'crear']);
Route::get('/edit/{id}', [UsersController::class, 'edit']);
Route::get('/administrador', [AdministradorController::class, 'index']);


Route::post('/borrar/{id}', [UsersController::class, 'bye']);
Route::post('/store', [UsersController::class, 'store']);
Route::post('/update/{id}', [UsersController::class, 'update']);
Route::post('/updateAdmin/{id}', [AdministradorController::class, 'update']);

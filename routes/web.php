<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelatoController;

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

Route::get('/',[RelatoController::class,'create'])->name('relato.formulario');
Route::post('/',[RelatoController::class, 'store'])->name('relato.enviar');

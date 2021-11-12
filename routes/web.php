<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;
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
Route::get('/personas', [PersonasController::class, 'index'])->name('index');

Route::get('/personas/{personas}/edit', [PersonasController::class, 'edit'])->name('edit');
Route::put('/udpate/{personas}', [PersonasController::class, 'update'])->name('update');

Route::delete('/personas/{personas}', [PersonasController::class, 'destroy'])->name('destroy');

Route::get('/create' , [PersonasController::class, 'create'])->name('create');
Route::post('/store' , [PersonasController::class, 'store'])->name('store');

<?php

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

/*Route::get('/', function () {
    return view('file');
})->name('index');*/
Route::post('/save',[\App\Http\Controllers\FileController::class,'store'])->name('store');
Route::get('/',[\App\Http\Controllers\FileController::class,'index'])->name('index');
Route::get('/delete/{file}',[\App\Http\Controllers\FileController::class,'destroy'])->name('destroy');

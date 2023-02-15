<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Deneme;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\WeatherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can reg ister web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('',[StudentController::class,'show'])->name('show');
Route::get('delete/{sid}',[StudentController::class,'delete']);
Route::get('update',[StudentController::class,'update'])->name('update');
Route::get('insert',[StudentController::class,'insert'])->name('insert');
Route::get('order/{sort}', [StudentController::class,'orderBy']) ->name('order');
Route::get('search',[StudentController::class,'search'])->name('search');



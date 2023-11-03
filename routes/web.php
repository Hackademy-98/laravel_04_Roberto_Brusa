<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FumettiController;

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

Route::get('/', function () {
    return view('HOME');
})->name('home');

// rotte per index e show fumetti
Route::get('/fumetti',[FumettiController::class,'index'])->name('fumetti');
Route::get('/fumetti/{nome}',[FumettiController::class,'show'])->name('fumetto');

// rotta per la form
Route::get('/contact-us',[FormController::class,'form'])->name('form');
Route::post('/contact-email',[FormController::class,'sendEmail'])->name('send.email');
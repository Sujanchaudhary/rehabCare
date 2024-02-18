<?php

use App\Http\Controllers\PreAdmitFormsController;
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


//patient routes
//patient preadmit form routes
Route::get('/guardian/entry-form',[PreAdmitFormsController::class,'create'])->name('showpreadmitform');
Route::post('/guardian/entry-form',[PreAdmitFormsController::class,'store'])->name('storepreadmitform');



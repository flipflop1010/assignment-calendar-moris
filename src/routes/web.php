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

Route::get('/calendar-design',[\App\Http\Controllers\CalendarController::class,'index']);

Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);

Route::name('event.')->prefix('event')->group(function(){
    Route::get('/create',[\App\Http\Controllers\EventController::class,'create'])->name('create');

});


<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[App\Http\Controllers\MainController::class, 'welcome']);
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/action', [App\Http\Controllers\PagesController::class, 'action'])->name('action');
Route::get('/eau', [App\Http\Controllers\EauController::class, 'eau'])->name('eau');
Route::get('/don', [App\Http\Controllers\HomeController::class, 'don'])->name('don');
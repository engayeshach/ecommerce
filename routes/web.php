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

Route::get('/', function () {
    return view('frontend.index');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin routes
Route::get('backend/index', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('backend.index')->middleware(['auth', 'isAdmin']);
Route::get('category/create', [App\Http\Controllers\DashboardController::class, 'create'])->name('category.create');
Route::post('category/store', [App\Http\Controllers\DashboardController::class, 'store'])->name('category.store');

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
Route::middleware('auth')->group(function(){
    // categories routes
    Route::get('backend/index', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('backend.index')->middleware(['auth', 'isAdmin']);
    Route::get('categories',[App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
        Route::prefix('category')->group(function(){
            Route::get('category/create',[App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
            Route::get('category/edit{category}',[App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
            Route::post('category/update',[App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
            Route::get('category/delete{category}',[App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.destroy');
            Route::post('category/store',[App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
        });
        // product routes
        Route::get('products', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
        Route::prefix('product')->group(function(){
            Route::get('product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
            Route::post('product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
            Route::get('product/edit{product}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
            Route::post('product/update', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
            Route::get('product/delete{product}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
        });

});



<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('coming-soon', function () {
    return view('errors.coming-soon');
});

// 8451850397

Auth::routes();

Route::middleware('auth','isAdmin')->prefix('admin')->as('admin.')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(CategoryController::class)->group( function () {
        Route::get('category/all', 'index')->name('category.all');
        Route::post('category/store', 'store')->name('category.store');
        Route::post('category/update', 'update')->name('category.update');
        Route::post('category/destroy', 'destroy')->name('category.destroy');
        Route::post('category/edit/{id}', 'edit')->name('category.edit');

        Route::get('sub-category/{slug}', 'subCategory')->name('subcategory');
    });

    Route::post('/category/status_enable_disable',[CategoryController::class,'status_enable_disable']);
    // Route::post('/category/show_home_enable_disable',[CategoryController::class,'show_home_enable_disable']);
    
});


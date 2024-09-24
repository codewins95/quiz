<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\StudentAuthController as AuthStudentAuthController;
use App\Http\Controllers\User\StudentAuthController;
use App\Http\Controllers\User\StudentDashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Modules\Student\App\Http\Controllers\StudentController;

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


// Auth::routes();

// Route::get('admin/login', function(){return view('auth.admin_login');});
// Route::post('student/login', [StudentAuthController::class,'auth'])->name('student.login');
Route::get('student/dashboard', [StudentDashboardController::class, 'index'])->name('student.dashboard');

// Student Routes
Route::group([],function () {
    Route::get('login', [AuthStudentAuthController::class, 'showLoginForm'])->name('student.login');
    Route::post('login', [AuthStudentAuthController::class, 'login'])->name('student.login.auth');
    Route::post('logout', [AuthStudentAuthController::class, 'logout'])->name('student.logout');
});

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'login'])->name('admin.login.auth');
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});




Route::middleware('auth','isAdmin')->prefix('admin')->as('admin.')->group(function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

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


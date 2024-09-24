<?php

use Illuminate\Support\Facades\Route;
use Modules\Student\App\Http\Controllers\StudentController;

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

Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    // Route::resource('student', StudentController::class)->names('student');
    Route::get('student', [StudentController::class, 'index'])->name('student.index');
    Route::get('student/create', [StudentController::class, 'create'])->name('student.create');
    Route::post('student/store', [StudentController::class, 'store'])->name('student.store');
    Route::get('student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
    Route::put('student/{student}/update', [StudentController::class, 'update'])->name('student.update');
    Route::post('student/delete', [StudentController::class, 'destroy'])->name('student.delete');
});

<?php

use Illuminate\Support\Facades\Route;
use Modules\PreviousPaper\App\Http\Controllers\PreviousPaperController;

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
    // Route::resource('previouspaper', PreviousPaperController::class)->names('previouspaper');
    Route::get('previous-paper', [PreviousPaperController::class, 'index'])->name('previouspaper.index');
    Route::get('previous-paper/fiilter', [PreviousPaperController::class, 'getPaper'])->name('previouspaper.paper.fiilter');
    
    Route::get('previous-paper/{category}/create', [PreviousPaperController::class, 'create'])->name('previouspaper.create');
    Route::post('previous-paper/store', [PreviousPaperController::class, 'store'])->name('previouspaper.store');
    Route::get('previous-paper/{paper}/edit', [PreviousPaperController::class, 'edit'])->name('previouspaper.edit');
    Route::put('previous-paper/{paper}/update', [PreviousPaperController::class, 'update'])->name('previouspaper.update');
    Route::post('previous-paper/delete', [PreviousPaperController::class, 'destroy'])->name('previouspaper.delete');
    Route::post('previous-paper/status_enable_disable', [PreviousPaperController::class, 'status_enable_disable'])->name('previouspaper.status_enable_disable');
});

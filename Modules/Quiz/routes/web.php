<?php

use Illuminate\Support\Facades\Route;
use Modules\Quiz\App\Http\Controllers\InstructionController;
use Modules\Quiz\App\Http\Controllers\QuestionBankController;
use Modules\Quiz\App\Http\Controllers\QuestionLevelController;
use Modules\Quiz\App\Http\Controllers\QuestionPapperController;
use Modules\Quiz\App\Http\Controllers\QuizController;

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

Route::group(['middleware'=>['auth','isAdmin'],'prefix'=>'admin','as'=>'admin.'], function () {
    Route::resource('quiz', QuestionPapperController::class)->names('quiz.paper');
    Route::get('quiz/create/papper/{any}', [QuestionPapperController::class,'createPapper'])->name('quiz.paper.create.papper');
    Route::get('quiz-filter', [QuestionPapperController::class,'getPaper'])->name('quiz.paper.fiilter');
    Route::post('quiz/papper/status_enable_disable', [QuestionPapperController::class,'status_enable_disable'])->name('quiz.paper.status');
    Route::post('paper/delete', [QuestionPapperController::class,'delete'])->name('quiz.paper.delete');


    Route::resource('instruction', InstructionController::class)->names('quiz.instruction');
    Route::post('instruction/delete', [InstructionController::class,'destroyInstruction'])->name('quiz.instruction.delete');
    Route::post('instruction/status_enable_disable', [InstructionController::class,'status_enable_disable'])->name('quiz.instruction.status');


    Route::get('level', [QuestionLevelController::class,'index'])->name('quiz.level.index');
    Route::post('level/store', [QuestionLevelController::class,'store'])->name('quiz.level.store');
    Route::post('level/edit/{id}', [QuestionLevelController::class,'edit'])->name('quiz.level.edit');
    Route::post('level/update', [QuestionLevelController::class,'update'])->name('quiz.level.update');
    Route::post('level/destroy', [QuestionLevelController::class,'destroy'])->name('quiz.level.destroy');


    Route::get('bank',[QuestionBankController::class,'index'])->name('quiz.bank.index');
    Route::get('bank/filter',[QuestionBankController::class,'bankFilter'])->name('quiz.bank.filter');
    Route::get('question/bank/{id}',[QuestionBankController::class,'questionBank'])->name('quiz.question.bank');
    Route::get('question/bank/create/{id}',[QuestionBankController::class,'create'])->name('quiz.question.bank.create');
    Route::post('question/bank/store',[QuestionBankController::class,'store'])->name('quiz.question.bank.store');
    Route::get('question/bank/edit/{paper_id}/{question_id}', [QuestionBankController::class, 'edit'])->name('quiz.question.bank.edit');
    Route::put('question/bank/update/{id}',[QuestionBankController::class,'update'])->name('quiz.question.bank.update');
    Route::post('question/bank/destroy',[QuestionBankController::class,'destroy'])->name('quiz.question.bank.destroy');

    Route::get('question-bank/export/{paper_id}/{category_id}',[QuestionBankController::class,'questionBankExport'])->name('question.bank.export');
    Route::post('import-question-bank', [QuestionBankController::class, 'importQuestionBank'])->name('import-question-bank');
});

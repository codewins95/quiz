<?php

namespace Modules\Quiz\App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Modules\Quiz\App\Http\Requests\QuestionRequest;
use Modules\Quiz\App\Models\Instruction;
use Modules\Quiz\App\Models\QuestionPapper;

class QuestionPapperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::whereNull('parent_id')->get();
        // $papers  =  QuestionPapper::all();
        return view('quiz::question_paper.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createPapper($categoriesId)
    {
        $categories = Category::find($categoriesId);
        $instructions = Instruction::all();
        return view('quiz::question_paper.create', compact('categories', 'instructions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuestionRequest $request)
    {
        DB::beginTransaction();
        try {

            $quiz = new QuestionPapper;
            $quiz->category_id   = $request->cat_id;
            $quiz->name   = $request->name;
            $quiz->description   = $request->description;
            $quiz->instruction   = $request->instruction;
            $quiz->examStatus   = $request->examStatus;
            $quiz->randomQuestion   = $request->randomQuestion;
            $quiz->examType   = $request->examType;
            $quiz->duration   = $request->duration;
            $quiz->markType   = $request->markType;
            $quiz->percentage   = $request->percentage;
            $quiz->showResultAfterExam   = $request->showResultAfterExam;
            $quiz->showMarkAfterExam   = $request->showMarkAfterExam;

            $quiz->ispaid   = $request->ispaid;
            if($request->cost != ''){
               $quiz->cost   = $request->cost; 
            }
            
            $quiz->published   = $request->published;
            $quiz->totalNoQuestion   = $request->totalNoQuestion;
            $quiz->totalNoSet   = $request->totalNoSet;
            $quiz->questionCurrectMark   = $request->questionCurrectMark;
            $quiz->questionWrongMark   = $request->questionWrongMark;
            $quiz->user_id = Auth::id(); 
            
            $quiz->save();
            Toastr::success('Question Paper Created Successfully', 'Success');
            DB::commit();
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error creating question paper: ' . $e->getMessage());
            //return $e->getMessage();
            abort(500);
        }
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $categories = decrypt($id);
        return view('quiz::question_paper.create', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $papers  =  QuestionPapper::find($id);
        $categories = Category::find($papers->category_id);
        $instructions = Instruction::all();
        return view('quiz::question_paper.create', compact('categories', 'papers','instructions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        try {

            $quiz = QuestionPapper::findorfail($id);
            $quiz->category_id   = $request->cat_id;
            $quiz->name   = $request->name;
            $quiz->description   = $request->description;
            $quiz->instruction   = $request->instruction;
            $quiz->examStatus   = $request->examStatus;
            $quiz->randomQuestion   = $request->randomQuestion;
            $quiz->examType   = $request->examType;
            $quiz->duration   = $request->duration;
            $quiz->markType   = $request->markType;
            $quiz->percentage   = $request->percentage;
            $quiz->showResultAfterExam   = $request->showResultAfterExam;
            $quiz->showMarkAfterExam   = $request->showMarkAfterExam;

            $quiz->ispaid   = $request->ispaid;
            if($request->cost != ''){
               $quiz->cost   = $request->cost; 
            }
            
            $quiz->published   = $request->published;
            $quiz->totalNoQuestion   = $request->totalNoQuestion;
            $quiz->totalNoSet   = $request->totalNoSet;
            $quiz->questionCurrectMark   = $request->questionCurrectMark;
            $quiz->questionWrongMark   = $request->questionWrongMark;
            $quiz->user_id = Auth::id(); 
            
            $quiz->save();
            Toastr::success('Question Paper Created Successfully', 'Success');
            
            return redirect()->back();
        } catch (\Exception $e) {
           
            //Log::error('Error creating question paper: ' . $e->getMessage());
            return $e->getMessage();
            abort(500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        try {
            $Category = QuestionPapper::findOrFail($request->id);
            $Category->delete();
            Toastr::success(' Deleted Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            abort(500);
        }
    }

    public function getPaper(Request $request)
    {
        if ($request->subCategoryId != '') {
            $catId = $request->subCategoryId;
        } else {
            $catId = $request->categoryId;
        }
        $papers  =  QuestionPapper::where('category_id', $catId)->get();
        $categories = Category::find($catId);
        return view('quiz::question_paper.gte_paper', compact('categories','papers'));
    }

    public function status_enable_disable(Request $request)
    {
       
        $request->validate([
            'id' => 'required|exists:categories,id',
            'status' => 'required|boolean',
        ]);

        $category = QuestionPapper::findOrFail($request->id);
        $category->status  = $request->status;
        $category->save();

        return response()->json(['message' => 'success']);
    }
}

<?php

namespace Modules\Quiz\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Modules\Quiz\App\Models\QuestionLevel;

class QuestionLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $levels = QuestionLevel::all();
        return view('quiz::question_level.question_level', compact('levels'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $level = new QuestionLevel();
            $level->title = $request->title;
            $level->save();
            Toastr::success('Question Paper Created Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Log::error('Error creating question paper: ' . $e->getMessage());
            abort(500);
        }
    }


    public function edit($id)
    {
        $leval = QuestionLevel::find($id);
        return $leval;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $level = QuestionLevel::find($request->levelId);
            $level->title = $request->title;
            $level->save();
            Toastr::success('Question Paper Update Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Log::error('Error creating question paper: ' . $e->getMessage());
            abort(500);
        }
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        try {
            $level = QuestionLevel::findOrFail($request->id);
            $level->delete();

            Toastr::success('Deleted Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            abort(500);
        }
    }
}

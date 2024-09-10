<?php

namespace Modules\Quiz\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Modules\Quiz\App\Models\Instruction;

class InstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructions = Instruction::all();
        return view('quiz::instruction.index', compact('instructions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quiz::instruction.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        try {
            $instruction = new Instruction;
            $instruction->title = $request->title;
            $instruction->content = $request->content;
            $instruction->save();

            Toastr::success('Instruction Create Successfully :)', 'success');
            return redirect()->route('admin.quiz.instruction.index');
        } catch (\Exception $th) {
            Log::info($th->getMessage());
            abort(500);
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $instructions = Instruction::find($id);
        return view('quiz::instruction.create', compact('instructions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        try {
            $instruction = Instruction::find($id);
            $instruction->title = $request->title;
            $instruction->content = $request->content;
            $instruction->save();

            Toastr::success('Instruction Update Successfully :)', 'success');
            return redirect()->route('admin.quiz.instruction.index');
        } catch (\Exception $th) {
            Log::info($th->getMessage());
            abort(500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyInstruction(Request $request)
    {
        try {
            $Category = Instruction::findOrFail($request->id);
            $Category->delete();
            Toastr::success(' Deleted Successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            abort(500);
        }
    }


    public function status_enable_disable(Request $request)
    {
       
        $request->validate([
            'id' => 'required|exists:categories,id',
            'status' => 'required|boolean',
        ]);

        $category = Instruction::findOrFail($request->id);
        $category->status  = $request->status;
        $category->save();

        return response()->json(['message' => 'success']);
    }
}

<?php

namespace Modules\PreviousPaper\App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\FileStore;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Modules\PreviousPaper\App\Models\PreviousPaper;
use Illuminate\Support\Facades\Log;

class PreviousPaperController extends Controller
{
    use FileStore;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::whereNull('parent_id')->get();
        return view('previouspaper::index', compact('categories'));
    }

    public function getPaper(Request $request)
    {
        if ($request->subCategoryId != '') {
            $catId = $request->subCategoryId;
        } else {
            $catId = $request->categoryId;
        }

        $papers  =  PreviousPaper::where('category_id', $catId)->get();
        $categories = Category::find($catId);
        return view('previouspaper::paper', compact('categories', 'papers'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create($categoryId)
    {
        return view('previouspaper::create',compact('categoryId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'file' => 'required'
        ]);

        try {

            $paper = new PreviousPaper();
            $paper->name = $request->name;
            $paper->description = $request->description;
            $paper->category_id = $request->categoryId;
             
            if ($request->file != '') {
                $paper->file = $this->imageUpload($request->file, 'previous_paper');
            }

            $paper->save();

            Toastr::success('Paper created successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            // return $e->getMessage();
            Log::error($e->getMessage());
            Toastr::error('Operation failed', 'Failed');
            return redirect()->back();
        }
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PreviousPaper $paper)
    {
        return view('previouspaper::edit', compact('paper'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $paper = PreviousPaper::find($id);

            if (!$paper) {
                Toastr::error('Paper not found', 'Failed');
                return redirect()->back();
            }


            if ($request->file != '') {
                $this->deleteImageDirect($paper->file);
                $paper->file = $this->imageUpload($request->file, 'previous_paper');
            }
            
            $paper->name = $request->name;
            $paper->description = $request->description;
            $paper->save();

            Toastr::success('Student updated successfully', 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            // return  $e->getMessage();
            Log::error($e->getMessage());
            Toastr::error('Operation failed', 'Failed');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $paper = PreviousPaper::find($request->id);

        if (!$paper) {
            Toastr::error('Paper not found', 'Failed');
            return redirect()->back();
        }
        $this->deleteImageDirect($paper->file);
        $paper->delete();
        Toastr::success('Paper deleted successfully', 'Success');
        return redirect()->back();
    }


    public function status_enable_disable(Request $request)
    {

        $request->validate([
            'id' => 'required|exists:categories,id',
            'status' => 'required|boolean',
        ]);

        $category = PreviousPaper::findOrFail($request->id);
        $category->status  = $request->status;
        $category->save();

        return response()->json(['message' => 'success']);
    }
}

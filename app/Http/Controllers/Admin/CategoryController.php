<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Traits\ImageStore;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    use ImageStore;

    public function index()
    {
        $max_id = Category::whereNull('parent_id')->max('position_order') + 1;
        $categories = Category::whereNull('parent_id')->get();
        return view('backend.category.category', compact('max_id', 'categories'));
    }

    public function store(CategoryRequest $request)
    {

        $is_exist = Category::where('name', $request->name)->first();

        if ($is_exist) {
            Toastr::error('This name has been already taken', 'Failed');
            return redirect()->back();
        }

        // DB::beginTransaction();

        try {

            if ($request->icon != "") {
                $url1 = $this->saveImage($request->icon, 100, 100);
            } else {
                $url1 = null;
            }


            $check_position = Category::where('position_order', $request->position_order)->first();

            if ($check_position != '') {
                $old_categories = Category::where('position_order', '>=', $request->position_order)->get();

                foreach ($old_categories as $old_category) {
                    $old_category->position_order = $old_category->position_order + 1;
                    $old_category->save();
                }
            }


            $store = new Category;
            $store->name = $request->name;
            $store->slug = Str::slug($request->name);

            if (!empty($request->parent_id)) {
                $store->parent_id = $request->parent_id;
            } else {
                $store->parent_id = null;
            }
            $store->position_order = $request->position_order;
            $store->status = $request->status;
            $store->show_home = $request->show_home;

            if (@$url1) {
                $store->icon = $url1;
            }

            $store->save();


            Toastr::success('Category Save Successfully :)', 'success');

            return redirect()->back();
        } catch (\Exception $e) {
            // DB::commit();
            return $e->getMessage();
            abort(500);
        }
    }

    public function update(Request $request)
    {

        $request->validate([
            'name'  => 'required|max:255',
        ]);

        $is_exist = Category::where('name', $request->name)->where('id', '!=', $request->id)->first();

        if ($is_exist) {
            Toastr::error('This name has been already taken', 'Failed');
            return redirect()->back();
        }

        try {

            if ($request->icon != "") {
                $url1 = $this->saveImage($request->icon, 100, 100);
            }

            $check_position = Category::where('position_order', $request->position_order)->first();

            if ($check_position != '') {
                $old_categories = Category::where('position_order', '>=', $request->position_order)->get();

                foreach ($old_categories as $old_category) {
                    $old_category->position_order = $old_category->position_order + 1;
                    $old_category->save();
                }
            }


            $store = Category::find($request->id);
            $store->name = $request->name;
            $store->slug = Str::slug($request->name);

            $store->status = $request->status ?? 1;
            $store->show_home = $request->show_home ?? 0;

            $store->position_order = $request->position_order;

            if (@$url1) {
                $store->icon = $url1;
            }

            if (!empty($request->parent_id)) {
                $store->parent_id = $request->parent_id;
            } else {
                $store->parent_id = null;
            }

            $results = $store->save();

            if ($results) {
                Toastr::success('Operation successful', 'success');
                return redirect()->back();
            } else {
                Toastr::error('Operation failed', 'error');
                return redirect()->back();
            }
        } catch (\Exception $e) {
            return $e->getMessage();
            abort(500);
        }
    }




    public function destroy(Request $request)
    {

        $request->validate([
            'id' => 'required'
        ]);


        $Category = Category::findOrFail($request->id);

        try {
            $success = 'Category Deleted Successfully';

            $Category->delete();

            Toastr::success($success, 'Success');
            return redirect()->back();
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            abort(500);
        }
    }


    public function edit($id)
    {
        $category = Category::find($id);
        $category->icon = uploaded_asset($category->icon);
        return $category;
    }




    public function subCategory($slug)
    {
        $cat = Category::where('slug', $slug)->first();
        $max_id = Category::where('parent_id', $cat->id)->max('position_order') + 1;
        $categories = Category::where('parent_id', $cat->id)->get();
        return view('backend.category.category', compact('max_id', 'categories', 'cat'));
    }


    public function status_enable_disable(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:categories,id',
            'status' => 'required|boolean',
        ]);

        $category = Category::findOrFail($request->id);
        $category->{$request->target} = $request->status;
        $category->save();

        return response()->json(['message' => 'success']);
    }


}

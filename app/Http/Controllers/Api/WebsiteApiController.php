<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\ImageStore;
use Illuminate\Http\Request;

class WebsiteApiController extends Controller
{
    use ImageStore;

    public function subCategory(Request $request)
    {

        
        try {
            $categories = Category::where('parent_id', $request->id)->get();

            $response = [
                'success' => true,
                'data' => $categories,
                'message' => "success",
            ];
            return response()->json($response, 200);
        } catch (\Exception $e) {
            $response = [
                'success' => false,
                'message' => $e->getMessage(),
            ];
            return response()->json($response, 500);
        }
    }
}

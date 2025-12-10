<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $categories=Category::paginate($perPage);

        return response()->json([$categories],200);
    }

    public function show($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return response()->json(['message'=>'Category not found'],404);
        }

        return response()->json($category,200);
    }
}

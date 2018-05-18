<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showAllCategory()
    {
        return response()->json(Category::all());
    }

    public function showOneCategory($id)
    {
        return response()->json(Category::find($id));
    }

    public function create(Request $request)
    {
        $Category = Category::create($request->all());

        return response()->json($Category, 201);
    }

    public function update(Request $request,$id)
    {
        $Category = Category::findOrFail($id);
        $Category->update($request->all());
        return response()->json($Category, 200);
    }

    public function delete($id)
    {
        Category::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}

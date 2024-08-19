<?php

namespace App\Http\Controllers;
use App\Helpers\ResponseHelper;
use App\Http\Requests\SportRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return ResponseHelper::respondWithSuccess();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate();

        $category = Category::create($validatedData);
         return ResponseHelper::respondWithSuccess();
    }

    public function show(Category $category)
    {

       return ResponseHelper::respondWithSuccess($category);
    }

    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate();

        $category->update($request->validated());

        return ResponseHelper::respondWithSuccess( $category);
    }

    public function destroy(Category $category)
    {
      $category->delete();

        return ResponseHelper::respondWithSuccess();
    }
}

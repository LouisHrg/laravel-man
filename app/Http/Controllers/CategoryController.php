<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
      $categories = Category::all();

      return view('categories.index', ['categories' => $categories]);
    }

    public function show(Request $request, Category $category)
    {
      return view('categories.show', ['category' => $category]);
    }

    public function create()
    {
      return view('categories.form');
    }

    public function store(Request $request)
    {
      $validated = $request->validate([
        "name" => "min:3|max:50|required",
      ]);

      $category = new Category;
      $category->name = $validated['name'];
      $category->slug = Str::of($validated['name'])->slug('-');
      $category->save();

      return redirect()->route('categories.index');
    }

    public function edit(Request $request, Category $category)
    {
      return view('categories.form', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
      $validated = $request->validate([
        "name" => "min:3|max:50|required",
      ]);

      $category->name = $validated['name'];
      $category->slug = Str::of($validated['name'])->slug('-');
      $category->save();

      return redirect()->route('categories.index');
    }

    public function destroy(Request $request, Category $category)
    {
      $category->delete();
      return redirect()->route('categories.index');
    }
}

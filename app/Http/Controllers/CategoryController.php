<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::paginate(10);
        return view('pages.categories.index', compact('categories'));
    }

    public function create() {
        $categories = DB::table('categories')->get();
        return view('pages.categories.create', compact('categories'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            // 'image' => 'required|images|mimes:png,jpg|max:2048',
        ]);

        $categories = new Category;
        $categories->name = $request->name;
        $categories->description = $request->description;
        $categories->save();

        // save image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/categories', $categories->id . '.' . $image->getClientOriginalExtension());
            $categories->image = 'storage/categories/' . $categories->id . '.' . $image->getClientOriginalExtension();
            $categories->save();
        }

        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }

    public function show($id) {
        return view('pages.categories.show');
    }

    public function edit($id) {
        $category = Category::findOrFail($id);
        return view('pages.categories.edit', compact('category'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            // 'image' => 'required|images|mimes:png,jpg|max:2048',
        ]);

        $categories = Category::find($id);
        $categories->name = $request->name;
        $categories->description = $request->description;
        $categories->save();

        // save image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/categories', $categories->id . '.' . $image->getClientOriginalExtension());
            $categories->image = 'storage/categories/' . $categories->id . '.' . $image->getClientOriginalExtension();
            $categories->save();
        }

        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    public function destroy($id) {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}

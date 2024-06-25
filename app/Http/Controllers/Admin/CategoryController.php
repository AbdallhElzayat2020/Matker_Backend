<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminCreateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminCreateCategoryRequest $request)
    {
        // $category = Category::create([
        //     'name' => $request->name
        // ]);

        // OR
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        toast(__('Category have been Created successfully'), 'success');
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        toast(__('Category have been Updated successfully'), 'success');
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $category = Category::findorFail($id);
            $category->delete();
            return response([ 'status' => 'success' , 'message' => 'Deleted successfully' ]);
        } catch (\Throwable $th) {
            return response([ 'status' => 'error' , 'message' => 'Something went wrong' ]);
        }
    }
}

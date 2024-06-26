<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\traits\FileUploadTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminEditProductRequest;
use App\Http\Requests\Admin\AdminCreateProductRequest;

class ProductController extends Controller
{
    // import FileUploadTrait from traits
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminCreateProductRequest $request)
    {
        // dd($request->all());
        $imgPath = $this->handleFileUpload($request, 'image');
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->image = $imgPath;
        $product->save();
        toast(__('Product has been created successfully'), 'success');

        return redirect()->route('admin.product.index');
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
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminEditProductRequest $request, string $id)
    {
        // dd($request->all());
        $product = Product::findOrFail($id);

        $imgPath = $this->handleFileUpload($request, 'image');

        $product = new Product();

        $product->title = $request->title;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->image = !empty($imgPath) ? $imgPath : $product->image;
        $product->save();
        toast(__('Product has been created successfully'), 'success');

        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $this->deleteFile($product->image);
        $product->delete();
        return response(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}

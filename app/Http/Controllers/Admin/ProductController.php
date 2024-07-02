<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\traits\FileUploadTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
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
        //         dd($request->all());
        $imgPath = $this->handleFileUpload($request, 'image');
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->product = $request->product;
        $product->category_id = $request->category_id;
        $product->image = $imgPath;
        $product->save();
        toast(__('Product has been created successfully'), 'success');

        return redirect()->route('admin.product.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
//        dd($id);

        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
//        dd($request->all());
        $product = Product::findOrFail($id);

        // تحديث البيانات الأساسية للمنتج
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;

        // حفظ الصورة الجديدة أو استخدام الصورة القديمة إذا لم يتم تحميل صورة جديدة
        $product->image = $this->handleFileUpload($request, 'image', $product->image);

        // حفظ التغييرات
        $product->save();


        return redirect()->route('admin.product.index')->with('success', 'تم تحديث المنتج بنجاح.');
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $path = $product->image;
        $this->deleteFile($path);

        $product->delete();
        return response(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}

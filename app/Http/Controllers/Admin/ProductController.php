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
use Illuminate\Support\Facades\Storage;

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
//        $imgPath = $this->handleFileUpload($request, 'image');
//        $product = new Product();
//        $product->title = $request->title;
//        $product->description = $request->description;
//        $product->price = $request->price;
//        $product->product = $request->product;
//        $product->category_id = $request->category_id;
//        $product->image = $imgPath;
//        $product->save();
//        toast(__('Product has been created successfully'), 'success');
//
//        return redirect()->route('admin.product.index');


        // Handle multiple file upload
        $imgPaths = $this->handleMultipleFileUpload($request, 'image');

        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->product = $request->product;
        $product->category_id = $request->category_id;
        $product->image = json_encode($imgPaths); // Store paths as JSON

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
        $product = Product::findOrFail($id);
        $oldImgPaths = json_decode($product->image, true) ?? [];

        // Handle new image uploads and delete old images if new ones are provided
        if ($request->hasFile('image')) {
            $imgPaths = $this->handleMultipleFileUpload($request, 'image', $oldImgPaths);
        } else {
            $imgPaths = $oldImgPaths;
        }

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->product = $request->product;
        $product->category_id = $request->category_id;
        $product->image = json_encode($imgPaths); // Store paths as JSON

        $product->save();

        toast(__('Product has been updated successfully'), 'success');

        return redirect()->route('admin.product.index');
    }

// مثال على دالة لمعالجة تحميل الصور


//    public function destroy(string $id)
//    {
//        $product = Product::findOrFail($id);
//        $path = $product->image;
//        $this->deleteFile($path);
//
//        $product->delete();
//        return response(['status' => 'success', 'message' => 'Deleted successfully']);
//    }


    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        // فك تشفير مسارات الصور المخزنة كـ JSON
        $imgPaths = json_decode($product->image, true);

        // حذف كل صورة
        if ($imgPaths) {
            foreach ($imgPaths as $path) {
                $this->deleteFile($path);
            }
        }

        // حذف المنتج من قاعدة البيانات
        $product->delete();

        return response(['status' => 'success', 'message' => 'Deleted successfully']);
    }
}

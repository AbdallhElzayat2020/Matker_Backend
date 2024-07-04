<?php

namespace App\Http\Controllers\frontend;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Go to Product Details Blade File with ID
     */
    public function index($id)
    {

        $product = Product::findOrFail($id);
        return view('frontend.product.product-details', compact('product'));
    }

    public function showCategoryProducts($id)
    {
        $category = Category::find($id);
        $products = Product::where('category_id', $id)->paginate(7);
        return view('frontend.product.category', compact('category', 'products'));
    }

}
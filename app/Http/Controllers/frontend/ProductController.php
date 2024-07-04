<?php

namespace App\Http\Controllers\frontend;

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

}

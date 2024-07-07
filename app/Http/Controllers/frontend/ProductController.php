<?php

namespace App\Http\Controllers\frontend;

use App\Models\Boxe;
use App\Models\Category;
use App\Models\Client;
use App\Models\CompanyFooter;
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
        $clients = Client::all();
//        $products = Product::all();
        $products = Product::paginate(10);
        $companies = CompanyFooter::all();
        $categories = Category::all();
        $boxes = Boxe::all();
        $product = Product::findOrFail($id);
        return view('frontend.product.product-details', compact('products', 'categories', 'boxes', 'companies', 'clients'));
    }









//    public function index()
//    {
//        $clients = Client::all();
////        $products = Product::all();
//        $products = Product::paginate(10);
//        $companies = CompanyFooter::all();
//        $categories = Category::all();
//        $boxes = Boxe::all();
//        return view('frontend.home', compact('products', 'categories', 'boxes', 'companies', 'clients'));
//    }


    public function showCategoryProducts($id)
    {
        $category = Category::find($id);
        $products = Product::where('category_id', $id)->paginate(7);
        return view('frontend.product.category', compact('category', 'products'));
    }

}

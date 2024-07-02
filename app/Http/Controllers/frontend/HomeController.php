<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Boxe;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $boxes = Boxe::all();
        return view('frontend.index', compact('products', 'categories', 'boxes'));
    }

}

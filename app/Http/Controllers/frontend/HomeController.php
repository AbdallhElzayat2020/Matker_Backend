<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Boxe;
use App\Models\Client;
use App\Models\CompanyFooter;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        $products = Product::all();
        $companies = CompanyFooter::all();
        $categories = Category::all();
        $boxes = Boxe::all();
        return view('frontend.index', compact('products', 'categories', 'boxes', 'companies', 'clients'));
    }

}

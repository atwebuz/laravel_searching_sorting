<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
{
    $sortBy = $request->input('sort_by', 'name'); // default sorting by name
    $products = Product::orderBy($sortBy)->paginate(10);
    return view('products.index', ['products' => $products]);
}
}

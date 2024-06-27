<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productDetails($id)
    {
        $product = Product::findOrFail($id);
        return view('product-details', ['product' => $product]);
    }

}

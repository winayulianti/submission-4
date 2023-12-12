<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $product = [
            ['name' => 'product 1', 'price' => 100],
            ['name' => 'product 2', 'price' => 150],
            ['name' => 'product 3', 'price' => 200],
        ];

        return view('product.index', ['product' => $products]);
    }
}

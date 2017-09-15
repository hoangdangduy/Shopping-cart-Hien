<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function getSearchProductyByTrademark($trademark) {
        $product = Product::where('trademark', $trademark)->get();
        return response()->json($product);
    }

    public function getSearchProductyByOrigin($origin) {
        $product = Product::where('origin', $origin)->get();
        return response()->json($product);
    }
}

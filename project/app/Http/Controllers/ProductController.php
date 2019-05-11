<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        //
    }
    
    public function index() {
        $products = Product::all();
        return response()->json($products);
    }
   
    public function show($id) {
        $product = Product::find($id);
        return response()->json($product);
    }

    public function create(Request $request) {
        $product = new Product;
        $product->title = $request->input("title");
        $product->brand = $request->input("brand");
        $product->price = $request->input("price");
        $product->image = $request->input("image");
        $product->description = $request->input("description");
        foreach ($request->get("stores") as $store) {
            $product->stores()->save($product, ['store_id' => $store]);
        }

        $status = response(new \Illuminate\Http\Response)->getStatusCode();

        if ($status == 200) {
            return response()->json(['success' => true]);
        } else {
            return response()->json();
        }
    }
}
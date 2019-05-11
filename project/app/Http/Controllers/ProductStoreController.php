<?php

namespace App\Http\Controllers;

use App\ProductStore;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductStoreController extends Controller
{
   
    public function index() {
        $product_store = ProductStore::all();
        return response()->json($product_store);
    }
   
}
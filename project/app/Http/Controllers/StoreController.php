<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __construct()
    {
        //
    }
    
    public function index() {
        $stores = Store::all();
        return response()->json($stores);
    }
   
    public function show($id) {
        $store = Store::find($id);
        return response()->json($store);
    }
}
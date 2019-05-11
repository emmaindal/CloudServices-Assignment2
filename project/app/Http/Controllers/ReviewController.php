<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct()
    {
        //
    }
    
    public function index() {
        $reviews = Review::all();
        return response()->json($reviews);
    }
   
    public function show($id) {
        $review = Review::find($id);
        return response()->json($review);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function showCategory()
    {
        $categories = DB::table('categories')->get();
        // return response()->json($categories);
        return $categories;
        // dd($categories); //laravel inbuilt method to test data
    }
}

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
        // return $categories; //raw data
        // dd($categories); //laravel inbuilt method to test data

        return view('allcategories', ['data' => $categories]);
    }

    public function singleCategory(string $id)
    {
        $category = DB::table('categories')->where('id', $id)->get();
        return $category;
    }
}

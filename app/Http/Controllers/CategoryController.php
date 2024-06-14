<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function allCategories()
    {
        $categories = DB::table('categories')->get();
        // dd($categories);
        return view('categories', ['data' => $categories]);
    }

    public function viewCategory(string $id)
    {
        $category = DB::table('categories')
            ->where('id', $id)
            ->get();
        // dd($category);
        return view('category', ['data' => $category]);
    }

    public function addCategory(Request $req)
    {
        $category = DB::table('categories')
            ->insert([
                'name' => $req->cat_name,
                'created_at' => now()
            ]);
        if ($category) {
            // echo '<h1>Category added successfully</h1>';
            return redirect()->route('view.categories');
        } else {
            echo '<h1>Something went wrong</h1>';
        }
    }
    public function updateCategoryData(Request $req, $id)
    {
        // return $req;
        $category = DB::table('categories')
            ->where('id', $id)
            ->update([
                'name' => $req->cat_name
            ]);

        if ($category) {
            // echo '<h1>Category updated successfully</h1>';
            return redirect()->route('view.categories');
        } else {
            echo 'something went wrong';
        }
    }

    public function updateCategory(string $id)
    {
        // $category = DB::table('categories')->where('id', $id)->get();
        $category = DB::table('categories')->find($id);

        // return $category;
        return view('updatecategory', ['data' => $category]);
    }

    public function deleteCategory(string $id)
    {
        $category = DB::table('categories')
            ->where('id', $id)
            ->delete();

        if ($category) {
            return redirect()->route('view.categories');
        }
    }
}

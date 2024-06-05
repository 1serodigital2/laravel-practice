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
        // return $category;
        // dd($category);
        return view('category', ['data' => $category]);
    }

    public function addCategory()
    {
        $category = DB::table('categories')
            ->insert([
                [
                    'name' => 'Lachen',
                    'created_at' => now()
                ],
                [
                    'name' => 'Shillong',
                    'created_at' => now()
                ]
            ]);
        // ->insert([
        //     'name' => 'Lachung',
        //     'created_at' => now()
        // ]);
        // dd($category);
        if ($category) {
            echo '<h1>Category added successfully</h1>';
        }
        // return $category;
    }

    public function updateCategory(string $id)
    {
        $category = DB::table('categories')
            ->where('id', $id)
            ->update([
                'name' => 'Test Category'
            ]);

        // dd($category);
        if ($category) {
            echo '<h1>Category updated successfully</h1>';
        }
    }

    public function deleteCategory(string $id)
    {
        $category = DB::table('categories')
            ->where('id', $id)
            ->delete();

        if ($category) {
            // echo '<h1>Category id=' . $id . ' deleted successfully</h1>';
            return redirect()->route('categories');
        } else {
            echo '<h1>Something went wrong</h1>';
        }
    }
}

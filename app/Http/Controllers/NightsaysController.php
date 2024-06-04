<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NightsaysController extends Controller
{
    public function showNightstays()
    {
        // $nightstays = DB::table('nightstays')->get();
        $nightstays = DB::table('nightstays as a')
            ->join('categories as b', 'a.category_id', '=', 'b.id')
            ->select('a.*', 'b.name as cat_name')
            ->get();

        // return $nightstays;
        return view('allnightstays', ['data' => $nightstays]);
    }

    public function singleNightstay(string $id)
    {
        $nightstay = DB::table('nightstays as a')
            ->join('categories as b', 'a.category_id', '=', 'b.id')
            ->select('a.*', 'b.name as cat_name')
            ->where('a.id', $id)
            ->get();
        // return $nightstay;
        return view('allnightstays', ['data' => $nightstay]);
    }

    public function addNightstay()
    {
        $categoryIds = category::pluck('id')->toArray();
        if (count($categoryIds) > 0) {
            // Get a random category ID from the list
            $randomCategoryId = $categoryIds[array_rand($categoryIds)];

            // Insert the new nightstay record with the random category ID
            $nightstay = DB::table('nightstays')->insert([
                [
                    'name' => 'Jhumla',
                    'category_id' => $randomCategoryId, // Assign the random category ID
                    'created_at' => now()
                ],
                [
                    'name' => 'Gulma',
                    'category_id' => $randomCategoryId, // Assign the random category ID
                    'created_at' => now()
                ],

            ]);

            // Return success message or handle accordingly
            return response()->json(['message' => 'Nightstay added successfully!']);
        } else {
            // Handle case where there are no categories
            return response()->json(['message' => 'No categories available!'], 400);
        }
    }
}

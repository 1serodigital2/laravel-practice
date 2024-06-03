<?php

namespace App\Http\Controllers;

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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NightstayController extends Controller
{
    public function allNightstays()
    {
        $nightstays = DB::table('nightstays')
            ->join('categories', 'nightstays.category_id', '=', 'categories.id')
            ->select('nightstays.*', 'categories.name as category')
            ->get();

        return view('nightstays', ['data' => $nightstays]);
    }

    public function addNightstayPage()
    {
        $categories = DB::table('categories')->select('name', 'id')->get();
        return view('addnightstay', ['data' => $categories]);
    }

    public function addNightstay(Request $req)
    {
        $nightstay = DB::table('nightstays')
            ->insert([
                'nightstay' => $req->nightstay,
                'category_id' => $req->category
            ]);
        if ($nightstay) {
            return redirect()->route('all.nightstays');
        } else {
            echo 'something went wrong';
        }
    }

    public function viewNightstay(string $id)
    {
        $nightstay = DB::table('nightstays')
            ->join('categories', 'nightstays.category_id', '=', 'categories.id')
            ->select('nightstays.*', 'categories.name as category')
            ->where('nightstays.id', $id)
            ->first();

        // dd($nightstay);
        return view('nightstay', ['data' => $nightstay]);
    }
}

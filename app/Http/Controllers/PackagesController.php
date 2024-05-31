<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackagesController extends Controller
{
    public function showPackages()
    {
        // $packages = DB::table('packages')->get();
        $packages = DB::table('packages as a')
            ->join('categories as b', 'a.category_id', '=', 'b.id')
            ->join('nightstays as c', 'a.nightstay_id', '=', 'c.id')
            ->select(
                'a.id as pkg_id',
                'a.name as pkg_name',
                'a.days',
                'a.status',
                'a.created_at',
                'b.name as cat_name',
                'c.name as nightstay'
            )
            ->get();

        // return $packages;
        return view('allpackages', ['data' => $packages]);
    }
}

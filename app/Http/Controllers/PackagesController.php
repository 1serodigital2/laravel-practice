<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackagesController extends Controller
{
    public function showPackages()
    {
        $packages = DB::table('packages')->get();
        return $packages;
    }
}

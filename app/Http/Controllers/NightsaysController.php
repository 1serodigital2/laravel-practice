<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NightsaysController extends Controller
{
    public function showNightstays()
    {
        $nightstays = DB::table('nightstays')->get();
        return $nightstays;
    }
}

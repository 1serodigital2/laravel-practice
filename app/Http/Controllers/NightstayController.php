<?php

namespace App\Http\Controllers;

use App\Models\Nightstay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NightstayController extends Controller
{
    public function index()
    {
        $nightstays = DB::table('nightstays')
            ->join('categories', 'nightstays.category_id', '=', 'categories.id')
            ->select('nightstays.*', 'categories.name as category')
            ->get();

        return view('nightstays', compact('nightstays'));
    }

    public function show(string $id)
    {
        $nightstay = DB::table('nightstays')
            ->join('categories', 'nightstays.category_id', '=', 'categories.id')
            ->select('nightstays.*', 'categories.name as category')
            ->where('nightstays.id', $id)
            ->first();

        // dd($nightstay);
        return view('nightstay', compact('nightstay'));
    }

    public function create()
    {
        $categories = DB::table('categories')->select('name', 'id')->get();
        return view('nightstayform', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                "nightstay" => "required",
                "category_id" => "required"
            ],
            [
                "nightstay.required" => "Please enter a name",
                "category_id.required" => "Please select category",
            ]
        );

        try {
            Nightstay::create($request->only('nightstay', 'category_id'));
            return redirect()->route('nightstays.index')->withSuccess('Nightstay added successfully');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage())->withInput();
        }
    }

    public function edit(string $id)
    {
        $edit = Nightstay::findOrFail($id);
        $categories = DB::table('categories')->select('name', 'id')->get();
        // dd($edit);
        return view('nightstayform', compact('edit', 'categories'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                "nightstay" => "required",
                "category_id" => "required"
            ],
            [
                "nightstay.required" => "Please enter a name",
                "category_id.required" => "Please enter category",
            ]
        );

        try {
            Nightstay::where('id', $id)->update($request->only('nightstay', 'category_id'));
            return redirect()->route('nightstays.index')->withSuccess('Nightstay updated successfully');
        } catch (\Throwable $th) {
            return back()->withErrors($th->getMessage())->withInput();
        }
    }

    public function destroy(string $id)
    {
        try {
            $nightstay = Nightstay::findOrFail($id);
            $nightstay->delete();
            return redirect()->route('nightstays.index')->withSuccess('Nightstay deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('nightstays.index')->withErrors('Failed to delete Nightstay: ' . $e->getMessage());
        }
    }
}

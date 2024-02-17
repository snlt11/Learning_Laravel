<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $cats = Category::all();
        return view('categories.index', compact('cats'));
    }


    public function create()
    {
        return view('categories.create');
    }


    public function store(Request $request)
    {
        $cats = Category::create([
            'name' => $request->name,
            'price' => $request->price
        ]);
        return redirect()->route('categories');
    }

    public function edit($id)
    {
        $cat = Category::find($id);
        return view('categories.edit', compact('cat'));
    }

    public function update(Request $request, $id)
    {
        $cat = Category::find($id);
        $cat->name = $request->name;
        $cat->price = $request->price;
        $cat->update();
        return redirect()->route('categories');
    }
    public function destroy($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        return redirect()->route('categories');
    }


    public function show($id)
    {
        $cat = Category::find($id);
        return view('categories.show',compact('cat'));
    }
}

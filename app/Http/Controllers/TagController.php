<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }
    public function create()
    {
        return view('tags.create');
    }
    public function store(Request $request)
    {
        $tag = Tag::create([
            'name' => $request->name
        ]);
        return redirect()->route('tags');
    }
    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('tags.edit', compact('tag'));
    }
    public function update(Request $request, $id)
    {
        $tag = Tag::find($id);
        $tag->name = $request->name;
        $tag->update();
        return redirect()->route('tags');
    }
    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return redirect()->route('tags');
    }
    public function show($id){
        $tag = Tag::find($id);
        return view('tags.show',compact('tag'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    //
    public function index()
    {
        $titles = Title::all();
        return view("/back/titles/all",compact("titles"));
    }
    // public function destroy($id)
    // {
    //     $title = Title::find($id);
    //     $title->delete();
    //     return redirect()->back();
    // }
    public function edit($id)
    {
        $title = Title::find($id);
        return view("/back/titles/edit",compact("title"));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $title = Title::find($id);
        $title->title = $request->title;
        $title->description = $request->description;
        $title->save();
        return redirect()->route("title.index")->with('message', 'Title Updated');
    }
    // public function create()
    // {
    //     return view("/back/titles/create");
    // }
    // public function store(Request $request)
    // {
    //     $title = new Title;
    //     $title->title = $request->title;
    //     $title->description = $request->description;
    //     $title->save();
    //     return redirect()->route("title.index");
    // }
}

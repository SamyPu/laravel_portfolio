<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        $abouts = About::all();
        return view("/back/abouts/all",compact("abouts"))->with('message', 'About Updated');
    }
    // public function destroy($id)
    // {
    //     $about = About::find($id);
    //     $about->delete();
    //     return redirect()->back();
    // }
    public function edit($id)
    {
        $about = About::find($id);
        return view("/back/abouts/edit",compact("about"));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'image' => 'required',
            'profession' => 'required',
            'description_1' => 'required',
            'list_1' => 'required',
            'list_2' => 'required',
            'list_3' => 'required',
            'list_4' => 'required',
            'list_5' => 'required',
            'list_6' => 'required',
            'list_7' => 'required',
            'list_8' => 'required',
            'description_2' => 'required',
        ]);

        $about = About::find($id);
        $about->image = $request->image;
        $about->profession = $request->profession;
        $about->description_1 = $request->description_1;
        $about->list_1 = $request->list_1;
        $about->list_2 = $request->list_2;
        $about->list_3 = $request->list_3;
        $about->list_4 = $request->list_4;
        $about->list_5 = $request->list_5;
        $about->list_6 = $request->list_6;
        $about->list_7 = $request->list_7;
        $about->list_8 = $request->list_8;
        $about->description_2 = $request->description_2;
        $about->save();
        return redirect()->route("about.index")->with('message', 'About Updated');
    }
    // public function create()
    // {
    //     return view("/back/abouts/create");
    // }
    // public function store(Request $request)
    // {
    //     $about = new About;
    //     $about->image = $request->image;
    //     $about->profession = $request->profession;
    //     $about->description_1 = $request->description_1;
    //     $about->list_1 = $request->list_1;
    //     $about->list_2 = $request->list_2;
    //     $about->list_3 = $request->list_3;
    //     $about->list_4 = $request->list_4;
    //     $about->list_5 = $request->list_5;
    //     $about->list_6 = $request->list_6;
    //     $about->list_7 = $request->list_7;
    //     $about->list_8 = $request->list_8;
    //     $about->description_2 = $request->description_2;
    //     $about->save();
    //     return redirect()->route("about.index");
    // }
}

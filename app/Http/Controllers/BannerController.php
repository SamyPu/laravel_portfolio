<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function index()
    {
        $banners = Banner::all();
        return view("/back/banners/all",compact("banners"));
    }
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view("/back/banners/edit",compact("banner"));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'text' => 'required',
            'typed' => 'required',
        ]);

        $banner = Banner::find($id);
        $banner->name = $request->name;
        $banner->text = $request->text;
        $banner->typed = $request->typed;
        $banner->bg_image = $request->bg_image;
        $banner->save();
        return redirect()->route("banner.index")->with('message', 'Banner Updated');
    }
}

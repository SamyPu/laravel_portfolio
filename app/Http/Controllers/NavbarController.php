<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    //
    public function index()
    {
        $navbars = Navbar::all();
        return view("/back/navbars/all",compact("navbars"));
    }
    public function edit($id)
    {
        $navbar = Navbar::find($id);
        return view("/back/navbars/edit",compact("navbar"));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'link_name' => 'required',
            'icon_1' => 'required',
            'icon2' => 'required',
            'icon3' => 'required',
            'icon4' => 'required',
            'icon5' => 'required',
            'icon6' => 'required',
            'icon7' => 'required',
            'icon8' => 'required',
            'icon9' => 'required',
            'icon10' => 'required',
            'link_icon1' => 'required',
            'link_icon2' => 'required',
            'link_icon3' => 'required',
            'link_icon4' => 'required',
            'link_icon5' => 'required',
            'name_icon6' => 'required',
            'name_icon7' => 'required',
            'name_icon8' => 'required',
            'name_icon9' => 'required',
            'name_icon10' => 'required',
        ]);
        $navbar = Navbar::find($id);
        $navbar->image = $request->image;
        $navbar->name = $request->name;
        $navbar->link_name = $request->link_name;
        $navbar->icon_1 = $request->icon_1;
        $navbar->link_icon1 = $request->link_icon1;
        $navbar->icon2 = $request->icon2;
        $navbar->link_icon2 = $request->link_icon2;
        $navbar->icon3 = $request->icon3;
        $navbar->link_icon3 = $request->link_icon3;
        $navbar->icon4 = $request->icon4;
        $navbar->link_icon4 = $request->link_icon4;
        $navbar->icon5 = $request->icon5;
        $navbar->link_icon5 = $request->link_icon5;
        $navbar->icon6 = $request->icon6;
        $navbar->name_icon6 = $request->name_icon6;
        $navbar->icon7 = $request->icon7;
        $navbar->name_icon7 = $request->name_icon7;
        $navbar->icon8 = $request->icon8;
        $navbar->name_icon8 = $request->name_icon8;
        $navbar->icon9 = $request->icon9;
        $navbar->name_icon9 = $request->name_icon9;
        $navbar->icon10 = $request->icon10;
        $navbar->name_icon10 = $request->name_icon10;
        $navbar->save();
        return redirect()->route("navbar.index")->with('message', 'Navbar Updated');
    }
}

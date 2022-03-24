<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    //
    public function index()
    {
        $footers = Footer::all();
        return view("/back/footers/all",compact("footers"));
    }
    public function edit($id)
    {
        $footer = Footer::find($id);
        return view("/back/footers/edit",compact("footer"));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'copyright' => 'required',
            'credit' => 'required',
        ]);
        $footer = Footer::find($id);
        $footer->copyright = $request->copyright;
        $footer->credit = $request->credit;
        $footer->save();
        return redirect()->route("footer.index")->with('message', 'Footer Updated');
    }
}

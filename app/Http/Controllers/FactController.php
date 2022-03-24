<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    //
    public function index()
    {
        $facts = Fact::all();
        return view("/back/facts/all", compact("facts"));
    }
    public function destroy($id)
    {
        $facts = Fact::all();
        $fact = Fact::find($id);
        if (count($facts) == 1) {
            return redirect()->back()->with('message', 'Au moins 1 connard');
        } else {
            $fact->delete();
            return redirect()->back()->with('message', 'Fact Deleted');
        }
    }
    public function edit($id)
    {
        $fact = Fact::find($id);
        return view("/back/facts/edit", compact("fact"));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'icone' => 'required',
            'number' => 'required',
            'description' => 'required',
        ]);
        $fact = Fact::find($id);
        $fact->icone = $request->icone;
        $fact->number = $request->number;
        $fact->description = $request->description;
        $fact->save();
        return redirect()->route("fact.index")->with('message', 'Fact Updated');
    }
    public function create()
    {
        return view("/back/facts/create");
    }
    public function store(Request $request)
    {
        $fact = new Fact;
        $facts = Fact::all();
        $request->validate([
            'icone' => 'required',
            'number' => 'required',
            'description' => 'required',
        ]);
        if (count($facts) == 4) {
            return redirect()->route("fact.index")->with('message', 'Pas plus que 4 connard');
        } else {  
            $fact->icone = $request->icone;
            $fact->number = $request->number;
            $fact->description = $request->description;
            $fact->save();
            return redirect()->route("fact.index")->with('message', 'Fact Created');
        }
    }
}

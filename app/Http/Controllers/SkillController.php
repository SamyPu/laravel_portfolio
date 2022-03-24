<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //
    public function index()
    {
        $skills = Skill::all();
        return view("/back/skills/all",compact("skills"));
    }
    public function destroy($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        return redirect()->back()->with('message', 'Skill Deleted');
    }
    public function edit($id)
    {
        $skill = Skill::find($id);
        return view("/back/skills/edit",compact("skill"));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'value' => 'required',
        ]);
        $skill = Skill::find($id);
        $skill->name = $request->name;
        $skill->value = $request->value;
        $skill->save();
        return redirect()->route("skill.index")->with('message', 'Skill Update');
    }
    public function create()
    {
        return view("/back/skills/create");
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'value' => 'required',
        ]);
        $skill = new Skill;
        $skill->name = $request->name;
        $skill->value = $request->value;
        $skill->save();
        return redirect()->route("skill.index")->with('message', 'Skill Created');
    }
}

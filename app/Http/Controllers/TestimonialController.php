<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    //
    public function index()
    {
        $testimonials = Testimonial::all();
        return view("/back/testimonials/all",compact("testimonials"));
    }
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view("/back/testimonials/edit",compact("testimonial"));
    }
    public function update($id, Request $request)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->comment = $request->comment;
        $testimonial->image = $request->image;
        $testimonial->name = $request->name;
        $testimonial->profession = $request->profession;
        $testimonial->save();
        return redirect()->route("testimonial.index");
    }
    public function create()
    {
        return view("/back/testimonials/create");
    }
    public function store(Request $request)
    {
        $testimonial = new Testimonial;
        $testimonial->comment = $request->comment;
        $testimonial->image = $request->image;
        $testimonial->name = $request->name;
        $testimonial->profession = $request->profession;
        $testimonial->save();
        return redirect()->route("testimonial.index");
    }
}

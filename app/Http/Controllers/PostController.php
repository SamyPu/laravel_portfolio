<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Banner;
use App\Models\Fact;
use App\Models\Footer;
use App\Models\Navbar;
use App\Models\Portfolio;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\Title;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $titles = Title::all();
        $abouts = About::all();
        $facts = Fact::all();
        $skills = Skill::all();
        $portfolios = Portfolio::all();
        $testimonials = Testimonial::all();
        $footers = Footer::all();
        $banners = Banner::all();
        $navbars = Navbar::all();
        
        for ($i=1; $i < 9; $i++) {
            $list = "list_" . $i;
            $value = Str::replaceArray('[', ["<strong>"], $abouts[0]->$list);
            $abouts[0]->$list = $value;
            $value = Str::replaceArray(']', ["</strong>"], $abouts[0]->$list);
            $abouts[0]->$list = $value;
            $value = Str::replaceArray('(', ["<span>"], $abouts[0]->$list);
            $abouts[0]->$list = $value;
            $value = Str::replaceArray(')', ["</span>"], $abouts[0]->$list);
            $abouts[0]->$list = $value;
        }
        foreach ($facts as $fact) {
            $value = Str::replaceArray('[', ["<strong>"], $fact->description);
            $fact->description = $value;
            $value = Str::replaceArray(']', ["</strong>"], $fact->description);
            $fact->description = $value;
        }
        foreach ($footers as $footer) {
            $value = Str::replaceArray('[', ["<strong>"], $footer->copyright);
            $footer->copyright = $value;
            $value = Str::replaceArray(']', ["</strong>"], $footer->copyright);
            $footer->copyright = $value;
            $value = Str::replaceArray('(', ["<span>"], $footer->copyright);
            $footer->copyright = $value;
            $value = Str::replaceArray(')', ["</span>"], $footer->copyright);
            $footer->copyright = $value;
            $value = Str::replaceArray('(', ["<a href='https://bootstrapmade.com/'>"], $footer->credit);
            $footer->credit = $value;
            $value = Str::replaceArray(')', ["</a>"], $footer->credit);
            $footer->credit = $value;
        }

        return view('welcome', compact("titles", "abouts","facts","skills","portfolios","testimonials","footers","banners","navbars"));
    }
    public function admin()
    {
        return view('back/admin');
    }
}

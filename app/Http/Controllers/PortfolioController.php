<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    //
    public function index()
    {
        $portfolios = Portfolio::all();
        return view("/back/portfolios/all",compact("portfolios"));
    }
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $destination = "img/" . $portfolio ->image;
        if (File::exists($destination)) 
        {
            File::delete($destination);
        }
        $portfolio->delete();
        return redirect()->back()->with('message', 'Portfolio Deleted');
    }
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        return view("/back/portfolios/edit",compact("portfolio"));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'filter' => 'required',
            'image' => 'required',
            'title' => 'required',
        ]);
        $portfolio = Portfolio::find($id);
        $portfolio->filter = $request->filter;
        $portfolio->image = $request->file("image")->hashName();
        $portfolio->title = $request->title;
        $portfolio->save();
        $request->file("image")->storePublicly("img","public");
        return redirect()->route("portfolio.index")->with('message', 'Portfolio Update');
    }
    public function create()
    {
        return view("/back/portfolios/create");
    }
    public function store(Request $request)
    {
        $request->validate([
            'filter' => 'required',
            'image' => 'required',
            'title' => 'required',
        ]);
        $portfolio = new Portfolio;
        $portfolio->filter = $request->filter;
        $portfolio->image = $request->file("image")->hashName();
        $portfolio->title = $request->title;
        $portfolio->save();
        $request->file("image")->storePublicly("img","public");
        return redirect()->route("portfolio.index")->with('message', 'Portfolio Created');
    }
}

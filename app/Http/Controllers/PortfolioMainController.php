<?php

namespace App\Http\Controllers;

use App\Http\Resources\PortfolioResource;
use App\Models\Portfolio;
use App\Models\User;
use Illuminate\Http\Request;

class PortfolioMainController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('id','desc')->get();
        return view('project', compact('portfolios'));
    }

    public function getPortfolioBySlug(Request $request)
    {
        $portfolio = Portfolio::whereSlug($request->slug)->orderBy('id','desc')->first();
        return view('project-detail', compact('portfolio'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Image;
use App\Models\Partner;
use Illuminate\Http\Request;
use App\Models\Team;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function team()
    {
        $teams = Team::orderBy('position')->get();
        return view('frontend.team', [
            'teams' => $teams
        ]);
    }

    public function about()
    {
        $partners = Partner::orderBy('position')->get();
        return view('frontend.about', [
            'partners' => $partners
        ]);
    }

    public function gallery()
    {
        $images = Image::with('gallery')->orderBy('position')->get();
        $galleries = Gallery::orderBy('position')->get();
        return view('frontend.gallery', [
            'images' => $images,
            'galleries' => $galleries
        ]);
    }
}

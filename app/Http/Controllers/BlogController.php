<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function About(Request $request)
    {
        return view('admin.about.about_us');
    }

    public function Features(Request $request)
    {
        return view('admin.features.feature');
    }

    public function Gallery(Request $request)
    {
        return view('admin.gellery.gellery');
    }

    public function Team(Request $request)
    {
        return view('admin.team.team');
    }

    public function Price(Request $request)
    {
        return view('admin.price.pricelist');
    }
}

<?php

namespace App\Http\Controllers;


use App\Price;

class HomeController extends Controller
{

    public function index()
    {
        $prices = Price::where('status',1)->get();
        return view('index',compact('prices'));
    }

    public function Blogger()
    {
        return view('Blog');
    }
}

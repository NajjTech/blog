<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use App\Price;
use Illuminate\Http\Request;
use App\Slider;

class HomeController extends Controller
{

    public function index()
    {
        $sliders = Slider::all();
        $categories = Category::all();
        $items = Item::all();
        $prices = Price::where('status',1)->get();
        return view('index',compact('sliders','categories','items','prices'));
    }

    public function Blogger()
    {
        return view('Blog');
    }
}

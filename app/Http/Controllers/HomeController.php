<?php

namespace App\Http\Controllers;


use App\Price;

class HomeController extends Controller
{

    public function index()
    {
        $nonmasking = Price::where('type',1)->where('status',1)->get();
        $masking = Price::where('type',2)->where('status',1)->get();
        $location = Price::where('type',3)->where('status',1)->get();
        return view('index',compact('nonmasking','masking','location'));
    }

    public function Blogger()
    {
        return view('Blog');
    }
}

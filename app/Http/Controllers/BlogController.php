<?php

namespace App\Http\Controllers;

use App\Price;
use Brian2694\Toastr\Facades\Toastr;
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
        $price = Price::paginate(10);
        return view('admin.price.pricelist',compact('price'));
    }

    public function PriceStore(Request $request)
    {
        $data = [

            'title' =>$request->title,
            'price' =>$request->price,
            'order' =>$request->order,
        ];
        Price::insert($data);
        Toastr::success('Price List Added','Success');
        return back();
    }

    public function PriceStatus($id,$status)
    {
        Price::whereId($id)->update(['status'=>$status]);
        Toastr::success('Price Status Updated','Success');
        return back();
    }

    public function EditPrice($id)
    {
        $price = Price::whereId($id)->first();
        return view('admin.price.edit',compact('price'));
    }
}

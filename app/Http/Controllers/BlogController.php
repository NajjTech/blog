<?php

namespace App\Http\Controllers;

use App\Price;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        return view('admin.blog.list');
    }

    public function create()
    {
        return view('admin.blog.create');
    }

   
}

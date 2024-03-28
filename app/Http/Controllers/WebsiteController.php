<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    public function home()
    {
        return view('website/main');
    }

    public function product()
    {
        return view('website/product');
    }

    public function aboutus()
    {
        return view('website/aboutus');
    }

    public function contact()
    {
        return view('website/contact');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function aboutUs()
    {
        return view('frontend.default.pages.about-us');
    }

    public function contact()
    {
        return view('frontend.default.pages.contact');
    }

}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListingController extends Controller
{

    public function index()
    {
        return view('frontend.default.listing.index');
    }

    public function showListing()
    {
        return view('frontend.default.listing.view');
    }

}

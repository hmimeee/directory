<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return view('frontend.user.listing.index');
    }

    public function create()
    {
        return view('frontend.user.listing.create');
    }

    public function store()
    {
        return view('frontend.user.listing.index');
    }

    public function show()
    {
        return view('frontend.user.listing.view');
    }

    public function edit()
    {
        return view('frontend.user.listing.edit');
    }


    public function update()
    {
        return view('frontend.user.lising.index');
    }

    public function destry()
    {
        return view('frontend.user.lising.index');
    }
}

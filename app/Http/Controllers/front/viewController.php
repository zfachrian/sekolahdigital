<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class viewController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function teamView()
    {
        return view('front.team');
    }

    public function contactView()
    {
        return view('front.contact');
    }

}

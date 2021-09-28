<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webpageController extends Controller
{
    public function index()
    {
        return view('webpage.home');
    }
    public function store()
    {
        return view('webpage.store');
    }
    public function products()
    {
        return view('webpage.products');
    }
    public function contactUs()
    {
        return view('webpage.contactus');
    }
    public function aboutUs()
    {
        return view('webpage.aboutus');
    }
}

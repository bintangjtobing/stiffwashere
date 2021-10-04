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
    public function outerwear()
    {
        return view('webpage.product.outerwear');
    }
    public function shirts()
    {
        return view('webpage.product.shirts');
    }
    public function privacyPolicy()
    {
        return view('webpage.ToSPP.policy');
    }
    public function termsCondition()
    {
        return view('webpage.ToSPP.terms');
    }
}

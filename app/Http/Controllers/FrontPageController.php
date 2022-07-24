<?php

namespace App\Http\Controllers;

class FrontPageController extends Controller
{
    public function index()
    {
        return view('website.pages.welcome');
    }

    public function blog(){
        return view('website.pages.blog');
    }
    function blogshow(){
        return view('website.pages.blogshow');
    }
}

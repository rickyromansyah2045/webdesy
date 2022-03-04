<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('frontend/index');
    }

    public function profile()
    {
        return view('frontend/profile');
    }

    public function product()
    {
        return view('frontend/product');
    }

    public function journal()
    {
        return view('frontend/journal');
    }

    public function contact()
    {
        return view('frontend/contact');
    }
}

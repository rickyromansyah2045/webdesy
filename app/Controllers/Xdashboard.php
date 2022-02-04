<?php

namespace App\Controllers;

class Xdashboard extends BaseController {
    public function index() {
        $data['title']  = 'Hal Dashboard';
        return view('dashboard/index', $data);
    }

    public function blogs() {
        $data['title']  = 'Hal Blogs';
        return view('dashboard/blogs', $data);
    }
}

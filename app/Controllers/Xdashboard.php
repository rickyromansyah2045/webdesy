<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\BlogModel;
class Xdashboard extends BaseController 
{
    protected $blogModel;
    public function __construct()
    {
        $this->blogModel = new BlogModel();
    }

    public function index() {
        $data['title']  = 'Halaman Dashboard';
        return view('dashboard/index', $data);
    }

    public function blogs() 
    {
        $data['title']  = 'Halaman Blogs';
        $data['blogs']   = $this->blogModel->get_blog_all();

        return view('dashboard/blogs', $data);
    }
}

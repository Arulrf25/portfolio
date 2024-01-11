<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PagesController extends BaseController
{
    public function home()
    {
        return view('pages/home/index');
    }

    public function about()
    {
        return view('pages/about/index');
    }

    public function resume()
    {
        return view('pages/resume/index');
    }

    public function services()
    {
        return view('pages/services/index');
    }

    public function portfolio()
    {
        return view('pages/portfolio/index');
    }

    public function contact()
    {
        return view('pages/contact/index');
    }
}

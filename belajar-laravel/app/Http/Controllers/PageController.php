<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class PageController extends Controller
{
    public function faq()
    {
        return view('faq.index');
    }

        public function contact()
    {
        $setting = Setting::get();
        return view('contact.index', compact('setting'));
    }

    public function blog()
    {
        return view('blog.index');
    }

    public function showBlog(string $id)
    {
        return view('blog.show');
    }
}

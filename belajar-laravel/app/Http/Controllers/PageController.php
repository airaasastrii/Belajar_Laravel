<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CategoryBlog;
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
        $categories = CategoryBlog::withCount('blogs')->get();
        // menghitung banyak nya kategori yg udah di pakai sama blog
        $totalBlogsCount = Blog::count();
        // banyaknya berita
        // $blogs = Blog::with('category')->orderBy('id', 'desc')->get();
        $blogs = Blog::with('category')->latest()->get();
        // latest ini artinya ngambil query dari item, tidak memerlukan get karena sudah di wakili

        return view('blog.index', compact('blogs', 'categories', 'totalBlogsCount'));
    }

    public function showBlog(string $slug)
    {
        $blog = Blog::where('slug', $slug)->with('category')->first();
        return view('blog.show');
    }
}

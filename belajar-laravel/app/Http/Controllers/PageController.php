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

    public function blog(Request $request)
    {
        $categories = CategoryBlog::withCount('blogs')->get();
        // menghitung banyak nya kategori yg udah di pakai sama blog
        $totalBlogsCount = Blog::count();
        // banyaknya berita
        // $blogs = Blog::with('category')->orderBy('id', 'desc')->get();
        $blogs = Blog::with('category')->latest();
        // latest ini artinya ngambil query dari item, tidak memerlukan get karena sudah di wakili

        // whereHas = untuk ambil nilai kategori berdasarkan nama
        if ($request->filled('category')){
            $blogs->whereHas('category', function($q) use ($request) {
                $q->where('name', $request->category);
            });
        }

        if($request->filled('search')) {
            $searchTerm = $request->search;

            $blogs->where(function ($q) use ($searchTerm) {
                $q->where('name','like',"%{$searchTerm}%") ->onWhere('brief_description', 'like', "%{$searchTerm}%")->orWhere("content","like", "%{$searchTerm}%");
            });
        }

        $featuredPost = null;
        if(!$request->filled('category') && !$request->filled('search')) {
            $featuredPost = (clone $blogs)->first();
        }

        if($featuredPost){
            $blogs->where('id', '!=', $featuredPost->id);
        }

        $blogs = $blogs->paginate(9)->withQueryString();
        return view('blog.index', compact('blogs', 'categories', 'totalBlogsCount', 'featuredPost'));
    }

    public function showBlog(string $slug)
    {
        $blog = Blog::where('slug', $slug)->with('category')->first();
        return view('blog.show');
    }
}

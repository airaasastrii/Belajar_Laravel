<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class CatalogController extends Controller
{
    public function category(string $slug)
    {
        // slug digital-printing id ke berapa
        $category = Category::where('slug', $slug)-> first();
        $products = $category->products()->paginate(10);

        return view('category.index', compact('products', 'category'));
    }

    public function product(string $slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('product.index', compact('product'));
    }
}

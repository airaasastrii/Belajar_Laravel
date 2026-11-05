<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Managemen Produk || PPKD Sticker";
        //one to many = satu produk punya banyak category
        $products = Product::with('category')->get();
        return view('admin.products.index', compact('title','products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Produk || PPKD Sticker";
        $categories = Category::all();
        return view('admin.products.create', compact('title','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    // slug untuk menambahkan garis" atau titik di url
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,gif|max:2048',
            'name' => 'required|string|max:60',
            'stock' => 'required|integer',
            'price' => 'required|integer',
            'price_art_cartoon' => 'nullable|integer',
            'price_art_paper' => 'nullable|integer',
            'price_hvs' => 'nullable|integer',
            'price_doft' => 'nullable|integer',
            'price_glossy' => 'nullable|integer',
            'cutting_price' => 'nullable|integer',
        ]);

        $imagePath = null;
        if ($request->image) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        Product::create([
            'category_id' => $request->category_id,
            'image' => $imagePath,
            'name' => $request->name,
            'stock' => $request->stock,
            'price' => $request->price,
            'price_art_cartoon' => $request->price,
            'price_art_paper' => $request->price_art_cartoon,
            'price_hvs' => $request->price_art_paper,
            'price_doft' => $request->price_hvs,
            'price_glossy' => $request->price_doft,
            'cutting_price' => $request->price_glossy,
        ]);
        return redirect()->route('admin.product.index')->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        if($request->hasFile('img')) {
            Storage::disk('public')->delete($product->img);
        }
        $validate['img'] = $request->file('img')->store('products', 'public');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        // $product = Product::find

        // if($product->'img') {
        //     Storage::disk('public')->delete($product->img);
        // }
        // $validate['img'] = $request->file('img')->store('products', 'public');
    }
}

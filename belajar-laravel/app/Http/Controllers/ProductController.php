<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


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
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,gif|max:2048',
            'name' => 'required|string|max:60',
            'slug' => 'nullable|string|unique:products,slug',
            'price' => 'required|integer',
            'price_art_cartoon' => 'nullable|integer',
            'price_art_paper' => 'nullable|integer',
            'price_hvs' => 'nullable|integer',
            'price_doft' => 'nullable|integer',
            'price_glossy' => 'nullable|integer',
            'cutting_price' => 'nullable|integer',
            'brief_description' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',


            // validasi product image
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:png,jpg,jpeg,webp|max:2048',
            'alt' => 'nullable|array',
            'alt.*' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',
        ]);

        // product, product images
        // transaction
        //kenapa pakai request dan validated, supaya variabel yg di luar bisa masuk kedalam variabel (db transaction)
        DB::transaction(function() use($request, $validated){
            $product = Product::create([
                'category_id' => $validated['category_id'],
                'name' => $validated['name'],
            ]);

            if($request->hasFile('images')){
                $imageData = [];

                foreach ($request->file('image') as $key => $file) {
                    $path = $file->store('products', 'public');

                    $imageData[] = [
                        'path' => $path,
                        'alt' => $request->input('alt.{$key}') ?? $product->name,
                        'sort_order' => $key + 1,
                    ];
                }
                $product->images()->createMany($imageData);

            }

        });

        return redirect()->route('admin.product.index')->with('success', 'Produk berhasil ditambahkan');



        $imagePath = null;
        if ($request->image) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        $validated['slug'] = $validated['slug'] ? Str::slug($validated['slug']) : Str::slug($validated['name']);

        // dd($validated['slug']);

        Product::create([
            'category_id' => $validated['category_id'],
            'image' => $imagePath,
            'name' => $validated['name'],
            'slug' => $validated['slug'],
            'price' => $validated['price'],
            'price_art_cartoon' => $validated['price_art_cartoon'],
            'price_art_paper' => $validated['price_art_paper'],
            'price_hvs' => $validated['price_hvs'],
            'price_doft' => $validated['price_doft'],
            'price_glossy' => $validated['price_glossy'],
            'cutting_price' => $validated['cutting_price'],
            'brief_description' => $validated['brief_description'],
            'description' => $validated['description'],
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
        // $validated = $request->validated();
        // $validated['image'] = $validated['image'] ?? 'bi bi-box-seam';
        // $validated['name'] = $validated['name'] ?? "";
        // $validated['stock'] = $validated['stock'] ?? 0;
        // $validated['price'] = $request->boolean('price');
        // $product->update($validated);

        $validated = $request->validate([
            'name'=> 'required|string',
            'slug'=> 'nullable|string|unique:products,slug,'. $product->id,
            'description'=> 'nullable|string',
            'sort_order'=> 'nullable|integer',
            'icon'=> 'nullable|string'
        ]);

        $validated['slug'] = $validated['slug'] ? Str::slug($validated['slug']) : Str::slug($validated['name']);
        $validated['sort_order'] = $validated['sort_order'] ?? 0;
        $product->update($validated);

        return redirect()->route('admin.product.index')->with('success', 'Produk berhasil diperbarui.');
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

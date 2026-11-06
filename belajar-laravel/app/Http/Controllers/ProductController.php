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
        $products = Product::with('category', 'images')->get();
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
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:60',
            'slug' => 'nullable|string|max:60|unique:products,slug',
            'price' => 'required|numeric',
            'brief_description' => 'nullable|string',
            'description' => 'nullable|string',
            'price_art_cartoon' => 'nullable|numeric',
            'price_art_paper' => 'nullable|numeric',
            'price_hvs' => 'nullable|numeric',
            'price_doft' => 'nullable|numeric',
            'price_glossy' => 'nullable|numeric',
            'cutting_price' => 'nullable|numeric',

            'images' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:2048',
            'alt' => 'nullable|array',
            'alt.*' => 'nullable|string|max:255',
            'sort_order.*' => 'required|integer'
        ]);

        // dd($request->images);

        //buat nambah gambar+produk barisan 64-88#byZidan // kalau dari pak tri di barisan 86-108 di vc nya
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        try {
            DB::beginTransaction();

            $arrImage = [];

            if ($request->has('images') && is_array($request->images)) {
                if (count($request->images) > 0) {
                    foreach ($request->images as $key => $image) {
                        if ($request->hasFile('images.' . $key)) {
                            $path = $image->store('products', 'public');

                            $arrImage[] = [
                                'path' => $path,
                                'alt' => $validated['alt'][$key],
                                'sort_order' => $validated['sort_order'][$key]
                            ];
                        }
                    }

                    // dd($arrImage);
                }
            }

            $product = Product::create([
                'category_id' => $validated['category_id'],
                'name' => $validated['name'],
                'slug' => $validated['slug'],
                'price_art_paper' => $validated['price_art_paper'],
                'description' => $validated['description'],
                'brief_description' => $validated['brief_description'],
                'price_art_cartoon' => $validated['price_art_cartoon'],
                'price_hvs' => $validated['price_hvs'],
                'price_doft' => $validated['price_doft'],
                'price_glossy' => $validated['price_glossy'],
                'cutting_price' => $validated['cutting_price'],
                'price' => $validated['price'],
            ]);


            $product->images()->createMany($arrImage);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();

            throw $th;
        }

        return redirect()->route('admin.product.index')->with('success', 'Product berhasil ditambahkan!');
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
        $validated = $request->validated();
        $validated['image'] = $validated['image'] ?? 'bi bi-box-seam';
        $validated['name'] = $validated['name'] ?? "";
        $validated['stock'] = $validated['stock'] ?? 0;
        $validated['price'] = $request->boolean('price');
        $product->update($validated);

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

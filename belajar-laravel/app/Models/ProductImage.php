<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = ['product_id', 'path', 'alt', 'sort_order'];

    // banyak gambar hanya di gunakan satu produk
    // satu: belongsTo
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}

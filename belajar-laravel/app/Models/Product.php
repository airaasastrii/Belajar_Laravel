<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'image', 'name', 'stock', 'price'];

    // many to one => banyak product ke satu category (belongsTo)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'sku', 'description', 'price', 'stock', 'category_id', 'status'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

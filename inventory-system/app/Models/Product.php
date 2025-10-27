<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'stock', 'category_id'];

    // Accessor for quantity (maps to stock)
    public function getQuantityAttribute() {
        return $this->stock;
    }
    public function setQuantityAttribute($value) {
        $this->attributes['stock'] = $value;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

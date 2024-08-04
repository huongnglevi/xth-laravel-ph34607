<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'sku',
        'image',
        'price',
        'price_sale',
        'description',
        'is_active',
        'is_20_sale',
        'is_hot',
    ];
    public $casts = [
        'is_active' =>'boolean',
        'is_20_sale' =>'boolean',
        'is_hot' =>'boolean',
    ];
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function variants() {
        return $this->hasMany(ProductVariant::class);
    }

}

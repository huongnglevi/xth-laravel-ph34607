<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'product_color_id',
        'product_size_id',
        'image',
        'quantity'
    ];
    public function ProductColor() {
        return $this->belongsTo(ProductColor::class);
    }
    public function ProductSize() {
        return $this->belongsTo(ProductSize::class);
    }
    
}

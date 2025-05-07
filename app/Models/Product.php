<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $primaryKey = 'id';

    public $timestamps = false; // Jika tabel tidak memiliki kolom created_at dan updated_at

    protected $fillable = [
        'product_name',
        'category',
        'type',
        'item',
        'weight',
        'sku',
        'price_sell',
        'price_promo',
        'price_agent',
        'photo',
        'recommendation',
        'description',
        'status',
        'ordering'
    ];

    /**
     * Relasi ke kategori produk (jika ada model kategori)
     */
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_category';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'parent_id',
        'icon',
        'icon_web',
        'status',
        'ordering'
    ];

    /**
     * Relasi ke kategori 
     */
    public function parentCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'parent_id');
    }

    /**
     * Relasi ke subkategori 
     */
    public function subCategories()
    {
        return $this->hasMany(ProductCategory::class, 'parent_id');
    }

}

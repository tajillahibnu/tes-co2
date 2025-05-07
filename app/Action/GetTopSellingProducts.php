<?php

namespace App\Action;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class GetTopSellingProducts
{
    public function handle()
    {
        return Product::select('product.id', 'product.product_name', DB::raw('SUM(order_detail.qty) as total_qty'))
            ->join('order_detail', 'product.id', '=', 'order_detail.product_id')
            ->groupBy('product.id', 'product.product_name')
            ->orderByDesc('total_qty')
            ->limit(10)
            ->get();
    }
}

<?php

namespace App\Http\Controllers;

use App\Action\GetTopAgentsByCustomers;
use App\Action\GetTopCustomersByOrders;
use App\Action\GetTopSellingProducts;
use Illuminate\Http\Request;
use Monolog\Formatter\GoogleCloudLoggingFormatter;

class ProductController extends Controller
{
    public function topSelling(GetTopSellingProducts $action)
    {
        // Menggunakan action class untuk mendapatkan produk terlaris
        $products = $action->handle();
        return response()->json([
            'success' => true,
            'message' => 'Top 10 produk terlaris berhasil diambil.',
            'data' => $products
        ]);
    }

    public function topCustomers(GetTopCustomersByOrders $action)
    {
        // Menggunakan action class untuk mendapatkan produk terlaris
        $customers = $action->handle();
        return response()->json([
            'success' => true,
            'message' => 'Top 10 customer dengan pembelian terbanyak.',
            'data' => $customers
        ]);
    }

    public function topAgents(GetTopAgentsByCustomers $action)
    {
        $agents = $action->handle();

        return response()->json([
            'success' => true,
            'message' => 'Top 10 agen dengan jumlah customer terbanyak.',
            'data' => $agents
        ]);
    }
}

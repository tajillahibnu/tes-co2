<?php

namespace App\Action;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class GetTopCustomersByOrders
{
    /**
     * Mengambil 10 customer dengan jumlah pembelian terbanyak.
     *
     * @return \Illuminate\Support\Collection
     */
    public function handle()
    {
        return User::withCount(['orders as total_orders'])
            ->whereHas('orders') // hanya user yang pernah order
            ->orderByDesc('total_orders')
            ->limit(10)
            ->get()
            ->map(function ($user) {
                return [
                    'id' => $user->id,
                    'customer_name' => trim($user->first_name . ' ' . $user->last_name),
                    'total_orders' => $user->total_orders
                ];
            });
    }
}

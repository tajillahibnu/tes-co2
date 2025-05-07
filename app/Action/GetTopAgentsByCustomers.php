<?php

namespace App\Action;

use App\Models\Agent;

class GetTopAgentsByCustomers
{
    public function handle()
    {
        return Agent::withCount(['customers as total_customers'])
            ->orderByDesc('total_customers')
            ->limit(10)
            ->get()
            ->map(function ($agent) {
                return [
                    'id' => $agent->id,
                    'store_name' => $agent->store_name,
                    'total_customers' => $agent->total_customers,
                ];
            });
    }
}

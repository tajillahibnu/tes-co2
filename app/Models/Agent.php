<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $table = 'agent';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'store_name',
        'partner_id',
        'pin_lock',
        'store_open',
        'store_close',
        'address',
        'kelurahan',
        'kecamatan',
        'kota',
        'provinsi',
        'kode_pos',
        'latitude',
        'longitude',
        'ktp',
        'kk',
        'npwp',
        'no_rekening',
        'buku_rekening',
        'point',
        'credit_limit',
        'subscription',
        'max_load',
        'default_agent',
    ];

    // Relasi antara Agent dan User
    public function user()
    {
        return $this->belongsTo(User::class, 'partner_id');
    }

    // Relasi antara Agent dan Customers (Melalui User)
    public function customers()
    {
        return $this->hasManyThrough(Customer::class, User::class, 'id', 'referral_id', 'id', 'id');
    }
}

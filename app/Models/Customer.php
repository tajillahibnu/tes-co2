<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id';

    public $timestamps = false;
    protected $fillable = [
        'referral_id',
        'address',
        'kelurahan',
        'kecamatan',
        'kota',
        'provinsi',
        'kode_pos',
        'latitude',
        'longitude',
        'no_rekening',
        'buku_rekening',
        'point',
        'default_address'
    ];

    public function referral()
    {
        return $this->belongsTo(User::class, 'referral_id');
    }
}

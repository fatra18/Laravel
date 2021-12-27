<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'layanan',
        'kode_layanan',
        'waktu_pengiriman',
        'minimal',
        'maksimal',
        'units_id',
        'informasi_pengiriman',
        'status',
    ];
    public function units(){
        return $this->belongsTo(Unit::class);
    }
}

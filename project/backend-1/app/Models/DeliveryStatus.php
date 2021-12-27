<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryStatus extends Model
{
    use HasFactory;
    protected $table="status_deliverys";
    protected $fillable = [
        'id',
        'nama_status_pengiriman',
        'kode_status_pengiriman',
        'informasi_status_pengiriman',
        'tipe_status',
        'status',
    ];
}

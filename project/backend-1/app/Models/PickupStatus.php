<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupStatus extends Model
{
    use HasFactory;
    protected $table="pickups";
    protected $fillable = [
        'id',
        'nama_status_pickup',
        'kode_status_pickup',
        'informasi_status_pickup',
        'tipe_status',
        'status',
    ];
}

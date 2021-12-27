<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_jenis_pembayaran',
        'kode_jenis_pembayaran',
        'informasi_jenis_pembayaran',
        'tipe_status',
        'status',
    ];
}

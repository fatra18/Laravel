<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_jenis_ukuran',
        'minimal_panjang_diameter',
        'minimal_lebar',
        'minimal_tinggi',
        'maksimal_panjang_diameter',
        'maksimal_lebar',
        'maksimal_tinggi',
        'satuan_panjang',
    ];
}

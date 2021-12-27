<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_jenis_barang',
        'jenis_kemasan',
        'panjang_maksimal',
        'lebar_maksimal',
        'tinggi_maksimal',
        'satuan_panjang',
        'berat_maksimal',
        'units_id',
    ];

    public function units(){
        return $this->belongsTo(Unit::class);
    }
}

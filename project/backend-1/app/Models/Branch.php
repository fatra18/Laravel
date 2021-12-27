<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $table="branchs";
    protected $fillable = [
        'id',
        'nama_cabang',
        'kode_cabang',
        'telpon_cabang',
        'email_cabang',
        'alamat_cabang',
        'provinces_id',
        'regencies_id',
        'districts_id',
        'villages_id',
        'jenis_kantor',
    ];

    public function provinces(){
        return $this->belongsTo(Province::class);
    }
    public function regencies(){
        return $this->belongsTo(Regency::class);
    }
    public function districts(){
        return $this->belongsTo(District::class);
    }
    public function villages(){
        return $this->belongsTo(Village::class);
    }
}

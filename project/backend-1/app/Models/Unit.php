<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;   
    protected $fillable = [
        'nama_satuan',
        'kode_satuan',
    ];
    public function item()
    {
        return $this->hasMany(Item::class,'id' ,'units_id');
}
    public function shipment()
    {
        return $this->hasMany(Shipment::class,'id' ,'units_id');
}
}

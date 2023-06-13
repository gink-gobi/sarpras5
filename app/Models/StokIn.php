<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokIn extends Model
{
    use HasFactory;

    protected $fillable = [
        'produk_id', 'satuan_id', 'tempat_id', 'harga_beli', 'tgl_beli', 'jml_produk'
    ];

    function produk() {
        return $this->belongsTo(Produk::class);
    }

    function satuan() {
        return $this->belongsTo(Satuan::class);
    }

    function tempat() {
        return $this->belongsTo(Tempat::class);
    }
}

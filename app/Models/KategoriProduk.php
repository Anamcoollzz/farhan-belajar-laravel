<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    protected $table = 'kategori_produk';

    public $timestamps = true;

    protected $fillable = [
        'id', 'nama_kategori', 'created_at', 'updated_at',
    ];
}

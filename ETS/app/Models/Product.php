<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'jenis_product_id',
        'kondisi',
        'nama',
        'deskripsi',
        'kecacatan',
        'jumlah',
        'gambar',
    ];

    public function JenisProduct() {
        return $this->belongsTo(JenisProduct::class, 'jenis_product_id');
    }

}

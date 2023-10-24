<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisProduct extends Model
{
    use HasFactory;

    protected $table = 'jenis_products';

    protected $fillable = [
        'nama',
    ];

    public function Product() {
        return $this->hasMany(Product::class, 'jenis_product_id');
    }

}

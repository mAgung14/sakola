<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = "kd_product";
    protected $keytype = "string";
    protected $fillable = ['nm_product','harga','deskripsi','image','kd_kategori'];
}

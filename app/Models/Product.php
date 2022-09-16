<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // Set Nama Tabel.
    protected $table = 'tbl_product';
    // Setting column yang boleh diisi.
    protected $fillable = [
        'nama',
        'id_kategori',
        'status',
        'images',
    ];
    
}

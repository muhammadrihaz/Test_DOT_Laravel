<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // Set Nama Tabel.
    protected $table = 'tbl_kategori';
    // Setting column yang boleh diisi.
    protected $fillable = [
        'nama',
    ];
}

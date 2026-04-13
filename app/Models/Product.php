<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Tambahkan baris ini untuk mengizinkan kolom-kolom berikut diisi secara massal
    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
    ];
}

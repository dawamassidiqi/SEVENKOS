<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kos extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'namaKos',
        'alamatKos',
        'hargaPerbulan',
        'fasilitasKos'

    ];
}

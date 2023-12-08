<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simulasi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_simulasi'; // Gunakan 'id_simulasi' sebagai primary key
    public $incrementing = false; // UUID tidak perlu increment

    protected $fillable = [
        'id_simulasi', 'kode_barang', 'uraian_barang', 'bm', 'nilai_komoditas', 'nilai_bm'
    ];
}

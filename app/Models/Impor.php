<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Impor extends Model
{
    protected $primaryKey = 'id_simulasi';
    public $incrementing = false;

    protected $fillable = [
        'id_simulasi',
        'kode_barang',
        'uraian_barang',
        'bm',
        'nilai_komoditas',
        'nilai_bm',
        'waktu_insert',
    ];

    protected $casts = [
        'nilai_komoditas' => 'float',
        'nilai_bm' => 'float',
        'waktu_insert' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id_simulasi = Uuid::uuid4()->toString();
        });
    }
}

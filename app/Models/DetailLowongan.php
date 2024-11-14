<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posisi;

class DetailLowongan extends Model
{
    use HasFactory;

    protected $table = 'detail_lowongans';

    protected $fillable = [
        'gambar',
        'kualifikasi',
        'penempatan',
        'tanggal_berakhir',
        'id_posisi'
    ];

    public function posisi()
    {
        return $this->belongsTo(Posisi::class, 'id_posisi'); // Menyesuaikan relasi belongsTo
    }
}


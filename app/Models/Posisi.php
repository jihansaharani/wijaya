<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetailLowongan;

class Posisi extends Model
{
    use HasFactory;

    protected $table = 'posisi';

    protected $fillable = [
        'posisi',
        'kualifikasi'
    ];

    public function detailLowongans()
    {
        return $this->hasMany(DetailLowongan::class, 'id_posisi');
    }
}

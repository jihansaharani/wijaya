<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;
    protected $fillable = [
        'namaperusahaan',
        'logo',
        'banner',
        'foto',
        'deskripsi',
        'instagram',
        'facebook',
        'website',
        'x'
    ];

}

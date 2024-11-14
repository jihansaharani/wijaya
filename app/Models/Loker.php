<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;
    protected $table = 'lokers'; // Optional: Specify the table name if it's different from the pluralized model name.

    protected $fillable = [
        'email',
        'name',
        'name_sekolah',
        'file_cv',
        'status'
    ];
}

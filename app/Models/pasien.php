<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien_t';

    protected $fillable = [
        'norm',
        'namapasien',
        'alamat',
        'tgl_lahir',
        'tempat_lahir',
        'user_fk'
    ];
}

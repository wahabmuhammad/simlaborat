<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai_m';

    protected $guard = [
        'id',
        'statusenabled'
    ];

    // public function user(): BelongsTo {
    //     return $this->belongsTo(User::class, 'pegawai_fk');
    // }
}

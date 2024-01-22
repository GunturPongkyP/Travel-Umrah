<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlamatModel extends Model
{
    protected $table = 'alamat';
    protected $primaryKey = 'id_alamat';
    protected $fillable = [
        'alamat_lengkap', 'rt/rw', 'kelurahan/desa', 'kecematan', 'kabupaten',
        'kodepos',
    ];
}

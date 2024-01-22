<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JemaahModel extends Model
{
    use HasFactory;

    protected $table = 'jemaah';
    protected $primaryKey = 'id_jemaah';
    protected $fillable = [
        'nama_lengkap', 'email', 'tempat_lahir', 'tanggal_lahir', 'nik',
        'jenis_kelamin', 'pekerjaan',  'alamat', 'rt_rw', 'kelurahan_desa', 'kecematan', 'kabupaten',
        'kodepos', 'berkas_pas_foto', 'password',
    ];
}

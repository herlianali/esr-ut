<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'karyawan';
    protected $fillable = [
        'user_id',
        'status_karyawan_id',
        'nik',
        'no_ktp',
        'nama_lengkap',
        'nama_panggilan',
        'jenis_kelamin',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        'npwp',
        'nama_bank',
        'no_rekening',
        'mulai_bekerja',
        'foto',
        'status',
        'is_pengawas'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
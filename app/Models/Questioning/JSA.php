<?php

namespace App\Models\Questioning;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JSA extends Model
{
    use HasFactory;
    protected $table = "jsa";
    protected $fillable = [
        'tanggal',
        'nama_pengawas',
        'posisi',
        'review',
        'jenis_review',
        'judul_jsa',
        'nomor_jsa',
        'jumlah_pekerja',
        'hasil_review',
        'sosialisasi_jsa',
        'shift',
        'lokasi_pelaksanaan',
        'foto',
    ];
}

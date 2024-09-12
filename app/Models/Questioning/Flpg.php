<?php

namespace App\Models\Questioning;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flpg extends Model
{
    const LIST_AKTIVITAS = [
        'FLPG 001' => 'Aktivitas Blasting',
        'FLPG 002' => 'Bekerja Dengan Alat Bergerak',
        'FLPG 003' => 'Bekerja di Area Dinding Tambang',
        'FLPG 004' => 'Bekerja di Dekat Air',
        'FLPG 005' => 'Bekerja Dengan Alat Angkat',
        'FLPG 006' => 'Bekerja di Ketinggian',
        'FLPG 007' => 'Bekerja Dengan Udara Bertekanan',
        'FLPG 008' => 'Bekerja Dengan Listrik',
        'FLPG 009' => 'Bekerja Dengan Hand Tools',
        'FLPG 010' => 'Bekerja di Ruang Terbatas',
    ];

    use HasFactory;
    protected $table = "flpg";
    protected $fillable = [
        'tanggal',
        'nama_pengawas',
        'lokasi',
        'jenis_pekerjaan',
        'aktivitas_flpg',
        'aktivitas',
        'catatan',
        'is_flpg'
    ];
}

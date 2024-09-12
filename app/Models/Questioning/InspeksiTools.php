<?php

namespace App\Models\Questioning;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspeksiTools extends Model
{
    const LIST_POSISI = [1 => 'Dept Head UT', 2 => 'Supervisor UT', 3 => 'PJO Mitra / PIC ESR Mitra', 4 => 'Pengawas Mitra'];
    use HasFactory;
    protected $table = "inspeksi_tools";
    protected $fillable = [
        'tanggal',
        'nama_pengawas',
        'posisi',
        'laporan_ko',
        'is_laporan_ko',
        'tanggal_laporan',
        'inspeksi_tools',
        'is_inspeksi_tools',
        'tanggal_inspeksi',
        'jenis_tools',
        'deviasi_temuan',
        'file'
    ];
}

<?php

namespace App\Models\Questioning;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Greencard extends Model
{
    use HasFactory;
    protected $table = "green_card";
    protected $fillable = [
        'tanggal',
        'jabatan',
        'pengawas',
        'nama_pengawas',
        'non_pengawas',
        'nama_lengkap',
        'nrp',
        'perusahaan',
        'sektor',
        'laporan_bahaya',
        'lokasi_bahaya',
        'detail_lokasi',
        'sektor_bahaya',
        'tindakan',
        'kategori_deviasi',
        'kategori_temuan',
        'kta_lanjut1',
        'kontribusi',
        'kta_lanjut2',
        'penjelasan',
        'tindakan_perbaikan',
        'usulan_tindakan',
        'foto',
        'is_perbaikan'
    ];
}

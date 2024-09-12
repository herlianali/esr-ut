<?php

namespace App\Models\Questioning;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspeksiSarana extends Model
{
    use HasFactory;
    protected $table = "inspeksi_sarana";
    protected $fillable = [
        'tanggal',
        'nama_pengawas',
        'lokasi_inspeksi',
        'nomor_lambung',
        'checklist_inspeksi',
        'kondisi_kendaraan',
        'catatan_kondisi_kendaraan',
        'driver_dan_penumpang',
        'catatan_penumpang',
        'prosedur_standar',
        'catatan_prosedur',
        'is_feedback',
        'catatan_khusus',
    ];
}

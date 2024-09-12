<?php

namespace App\Models\Questioning;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BbsqService extends Model
{
    const LIST_PERUSAHAAN = [1 => 'BP', 2 => 'HMU', 3 => 'KAMAJU', 4 => 'HARYONO', 5 => 'NAJ', 6 => 'NIKMAT', 7 => 'TPP', 8 => 'TRAC', 9 => 'UT', 10 => 'UTR'];
    const LIST_RINTANGAN = [
        1 => 'Menganggap sudah Bekerja Aman', 
        2 => 'Motivasi Kerja yang keliru', 
        3 => 'Jalan Pintas',
        4 => 'Bekerja Berlebihan',
        5 => 'Tidak ada Prosedur',
        6 => 'Tidak tersedia APD',
        7 => 'Tidak Mengetahui',
        8 => 'Kebiasaan',
        9 => 'Pilihan Pribadi',
        10 => 'Tidak Fokus',
        11 => 'Perbedaan pendapat mengenai keselamatan',
        12 => 'Peralatan tidak sesuai',
        13 => 'Tidak ada pengawasan',
        14 => 'Kurang Pelatihan'
    ];
    use HasFactory;
    protected $table = "bbsq_service";
    protected $fillable = [
        'tanggal',
        'nama_pengawas',
        'lokasi_pelaksanaan',
        'nama_karyawan',
        'perusahaan_karyawan',
        'aktivitas',
        'kategori_observasi',
        'observasi',
        'catatan_deskripsi',
        'deskripsi_perilaku',
        'yang_dilakukan',
        'rintangan',
        'is_perilaku_beresiko',
        'tindakan_perbaikan',
        'tindakan_pencegahan',
        'is_temuan_beresiko',
        'catatan_deskripsi_2',
        'deskripsi_perilaku_2',
        'yang_dilakukan_2',
        'rintangan_2',
        'is_perilaku_beresiko_2',
        'tindakan_perbaikan_2',
        'tindakan_pencegahan_2',
        'is_feedback_1',
        'is_feedback_2',
    ];

}

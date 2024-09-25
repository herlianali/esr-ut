<?php

namespace App\Models\Questioning;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BbsqNonService extends Model
{
    const LIST_PERUSAHAN = [ 'BP', 'HMU', 'KAMAJU', 'NAJ', 'NIKMAT', 'TPP', 'TRAC', 'UT', 'UTE', 'OTHER'];
    const LIST_KATEGORI = ['Prosedur', 'APD/ Alat Keselamatan', 'Alat & Peralatan Kerja', 'Fasilitas', 'House Keeping', 'Lingkungan', 'Kesehatan', 'Tidak Ada'];
    const LIST_FOLOWUP = ['Personal Contact', 'Sanksi Surat Peringatan', 'Sanksi Pelubangan sesuai SPDK', 'Melaporkan ke PIC terkait karena bukan kewenangan saya', 'Tidak Dilakukan Tindakan'];
    const LIST_AREA = ['OFFICE', 'WAREHOUSE', 'WORKSHOP', 'CATERING', 'MESS', 'FIELD'];

    use HasFactory;

    protected $table = "bbsq_non_service";
    protected $fillable = [
        'tanggal',
        'nama_pengawas',
        'nama_karyawan',
        'jabatan_karyawan',
        'perusahaan_karyawan',
        'jenis_pekerjaan',
        'lokasi',
        'checklist_deskripsi',
        'prosedur',
        'peralatan',
        'lingkungan_kerja',
        'karyawan',
        'tta_temuan',
        'kategori_deviasi_tta',
        'folowup_tta',
        'kta_temuan',
        'kategori_deviasi_kta',
        'folowup_tta',
        'kategori_deviasi_kta',
        'folowup_kta',
        'kontrol_tambahan',
        'feedback_1',
        'feedback_2',
    ];
}

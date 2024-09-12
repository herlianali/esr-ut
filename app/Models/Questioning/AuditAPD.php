<?php

namespace App\Models\Questioning;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditAPD extends Model
{
    const LIST_PERUSAHAAN = ['BP', 'HMU', 'KAMAJU', 'NAJ', 'NIKMAT', 'TPP', 'TRAC', 'UT', 'UTE'];
    use HasFactory;
    protected $table = "audit_apd";
    protected $fillable = [
        'tanggal',
        'nama_pengawas',
        'mialokasi',
        'checklist_audit',
        'jumlah_karyawan_audit',
        'is_deviasi',
        'deviasi',
        'jumlah_karyawan_deviasi',
        'detail_temuan',
        'nama_karyawan',
        'jabatan_karyawan',
        'perusahaan',
        'validasi',
        'is_audit',
        'catatan_khusus',
    ];
}

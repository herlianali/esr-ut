<?php

namespace App\Models\Questioning;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genba extends Model
{
    const LIST_AREA = [ 1 => 'office', 2 => 'workshop', 3 => 'field', 4 => 'warehouse', 5 => 'catering', 6 => 'mess' ];
    const LIST_KATEGORI = [ 1 => 'Prosedur', 2 => 'APD / Alat Kesehatan', 3 => 'Alat & Peralatan Kerja', 'Fasilitas', 4 => 'House Keeping', 5 => 'Lingkungan', 6 => 'Kesehatan' ];
    const LIST_FOLLOW_UP = [ 1 => 'Personal Contact', 2 => 'Sanksi Surat Peringatan', 3 => 'Sanksi Pelubangan sesuai SPDK', 4 => 'Melaporkan ke PIC terkait karena bukan kewenangan saya', 5 => 'Tidak Dilakukan Tindakan'];
    const LIST_PENYELENGGARA = [ 1 => 'Genba Internal UT', 2 => 'Genba Intrenal Mitra Kerja', 3 => 'Genba Bersama KTT & PJO Mitra Utama', 4 => 'Genba Bersama Customer' ];

    use HasFactory;
    protected $table = "genba";
    protected $fillable = [
        'tanggal',
        'area',
        'lokasi',
        'nama_pengawas',
        'deskripsi_tindakan',
        'kategori_tindakan',
        'usulan_tindakan',
        'foto_tindakan',
        'follow_up_tindakan',
        'deskripsi_kondisi',
        'kategori_kondisi',
        'usulan_kondisi',
        'foto_kondisi',
        'follow_up_kondisi',
        'keikutsertaan',
        'penyelenggara',
        'dokumentasi',
    ];
}

<?php

namespace App\Models\Questioning;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalContact extends Model
{
    const LIST_PERUSAHAAN = [
        1 => 'BP',
        2 => 'HMU',
        3 => 'KAMAJU',
        4 => 'NAJ',
        5 => 'NIKMAT',
        6 => 'TPP',
        7 => 'TRAC',
        8 => 'UT',
        9 => 'UTE',
    ];

    use HasFactory;
    protected $table = "personal_contact";
    protected $fillable = [
        'tanggal',
        'nama_pengawas',
        'nama_karyawan',
        'jabatan',
        'perusahaan',
        'topik',
        'isi_pembahasan_topik',
        'isi_pembahasan_tta',
        'kesimpulan',
        'is_personal_contact',
        'is_persetujuan',
    ];
    
}

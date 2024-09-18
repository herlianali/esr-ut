<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanTarget extends Model
{
    const LIST_ITEM = [
        'Green Card',
        'Genba' => [
            1 => '2.1 Kehadiran / Pelaksanaan Genba',
            2 => '2.2 Follow up genba'
        ],
        'BBSQ',
        'Personal Contact',
        'Safety Talk',
        'JSA' => [
            1 => '6.1 Review JSA',
            2 => '6.2 Sosialisasi JSA',
        ],
        'P5M',
        'FLPG',
        'Inspeksi Sarana',
        'Audit APD',
        'Inspeksi Tools & Laporan KO' => [
            1 => '11.1 Inspeksi Tools',
            2 => '11.2 Laporan KO',
        ],
        'House Keeping',
        'SCM Safety Committe Meeting' => [
            1 => '13.1 Kehadiran SCML 1 (PJO, WPJO, ESRDH, DH, PJO Mitra, PIC ESR Mitra)',
            2 => '13.2 Kehadiran SCML 2 Dept (DH, Spv, PJO Mitra, Pengawas Mitra, PIC ESR Mitra)'
        ],
    ];

    use HasFactory;
    protected $table = "plan_target";
    protected $fillable = [
        'tahun',
        'item',
        'management_ut',
        'dept_head_ut',
        'supervisor_ut',
        'leader_ut',
        'pjo_mitra',
        'pengawas_mitra',
        'pic_esr_mitra',
        'advisor_qa',
        'psce',
        'qa_officer',
        'all_karyawan',
    ];
    
}

<?php

namespace App\Models\Questioning;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SafetyTalk extends Model
{
    const LIST_LOKASI = [
        'BUMA (Mainshop)',
        'BUMA (Paringin)',
        'RISA Office',
        'RISA UTE',
        'RISA Warehouse',
        'SIS (MIA 4)',
        'SIS (KM 35 b)',
        'SIS (SERA)',
        'TC',
        'PPA (WARA)',
        'Online (MS Team, Youtube, Zoom, Dll)',
    ];
    use HasFactory;
    protected $table = "safety_talk";
    protected $fillable = [
        'tanggal',
        'nama_pengawas',
        'lokasi',
        'nama_pemateri',
        'judul',
        'penyelenggara',
        'dokumentasi',
    ];
}

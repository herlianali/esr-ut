<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengawas extends Model
{
    use HasFactory;
    const LIST_KELOMPOK_TARGET = [
        'MANAGEMENT',
        'DEPT_HEAD',
        'SUPERVISOR',
        'LEADER',
        'PJO MITRA',
        'PENGAWAS MITRA',
        'PIC ESR MITRA',
        'ADVISOR QA',
        'PSCE',
        'QA',
    ];
    
    protected $table = "pengawas";
    protected $fillable = [
        'user_id',
        'sektor_id',
        'kelompok_target',
        'jabatan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function sektor()
    {
        return $this->belongsTo(Sektor::class, 'sektor_id', 'id');
    }
}

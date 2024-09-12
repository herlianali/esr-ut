<?php

namespace App\Models\Questioning;

use App\Models\Pengawas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;
    protected $table = "cuti";
    protected $fillable = [
        'nama_pengawas',
        'bulan',
        'total_cuti',
        'alasan',
    ];
}

<?php

namespace App\Models\Questioning;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P5M extends Model
{
    use HasFactory;
    protected $table = 'p5m';
    protected $fillable = [
        'tanggal',
        'shift',
        'nama_pengawas',
        'dokumentasi',
        'nama_pemateri',
        'materi_kplh',
        'foto'
    ];
}

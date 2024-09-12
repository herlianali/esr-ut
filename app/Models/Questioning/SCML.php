<?php

namespace App\Models\Questioning;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SCML extends Model
{
    use HasFactory;
    protected $table = "scml";
    protected $fillable = [
        'tanggal',
        'nama_pengawas',
        'lokasi_pelaksanaan',
        'file',
    ];
}

<?php

namespace App\Models\Questioning;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Housekeeping extends Model
{
    use HasFactory;
    protected $table = "housekeeping";
    protected $fillable = [
        'tanggal',
        'nama_pengawas',
        'lokasi',
        'detail',
        'dokumentasi',
    ];
}

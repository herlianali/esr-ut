<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiturProgram extends Model
{
    use HasFactory;
    protected $table = "fitur_program";
    protected $fillable = [
        'nama',
        'url',
        'icon',
        'kode',
        'parent_kode'
    ];


}

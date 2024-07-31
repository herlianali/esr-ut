<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HakAkses extends Model
{
    use HasFactory;
    protected $table = "hak_akses";
    protected $fillable = [
        'user_level_id',
        'fitur_program_id'
    ];

    public function user_level()
    {
        return $this->belongsTo(UserLevel::class, 'user_level', 'id');
    }
}

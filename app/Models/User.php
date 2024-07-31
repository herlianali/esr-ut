<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $table = "user";
    protected $fillable = [
        'user_level_id',
        'nama',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $with = ['user_level'];

    public function user_level()
    {
        return $this->belongsTo(UserLevel::class, 'user_level_id');
    }

    public function pegawai()
    {
        return $this->hasOne(Pegawai::class, 'user_id', 'id');
    }

}

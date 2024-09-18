<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestioningOption extends Model
{
    use HasFactory;

    protected $table = "questioning_option";
    protected $fillable = [
        'menu',
        'title',
        'pertanyaan',
    ];
    
}

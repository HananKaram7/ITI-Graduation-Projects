<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ateendes extends Model
{
    use HasFactory;
    protected $fillable=[

        'firstname',
        'lastname', 
        'email', 
        'Phonenum',
        'attendingas',
        'educationalstatus',
        'governorate', 
        'college',
        'comment'

    ];
}

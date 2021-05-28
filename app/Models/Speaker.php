<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;
    protected $fillable=[

        'fullname',
        'email', 
        'Phonenum' ,
        'jobtittle',
        'Linked_In_Profile_Link',
        'bio',
        'governorate', 
        'company',
        'image_upload', 
        'comment'

    ];
}

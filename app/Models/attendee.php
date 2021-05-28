<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attendee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',  'email', 'phone', 'attending_as', 'entity', 'education', 'gov',
        'college', 'interests', 'fav_activity', 'how','comment'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class startup extends Model
{
    use HasFactory;
    protected $fillable = [
        'startup_name', 'industry', 'website', 'stage', 'gov', 
        'fund', 'money','doner','founder_name','founder_email', 'founder_phone', 'whyID','brief','booth_supplies', 'booth_stuff','comment'
    ];
}

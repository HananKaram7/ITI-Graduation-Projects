<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partner extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name', 'company_brief', 'company_url', 'package_type', 'rep_name', 
        'rep_email', 'rep_email', 'rep_phone', 'booth_supplies', 'booth_stuff','comment'
    ];
}

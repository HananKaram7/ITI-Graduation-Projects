<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hackathon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'mobile', 'email', 'Background_Experience', 'Governate', 'Profile_Link', 'participating', 'teamName',
        'teamNo', 'membersNames', 'Describe_Idea', 'Need_To_Execute_Your_Idea', 'Mentorship_You_Need', 'Participated_Hackathons_Before',
        'Hackathon_Name', 'Know_About', 'comment'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamRegistration extends Model
{
    use HasFactory;

    protected $fillable =[
        'clubName',
        'email',
        'address',
        'phone',
        "league",
    ];
}

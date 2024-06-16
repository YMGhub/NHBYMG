<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'age',
        'phone_home',
        'phone_work',
        'phone_mobile',
        'email',
        'resume',
        'cover_letter',
    ];
}

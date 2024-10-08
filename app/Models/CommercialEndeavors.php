<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommercialEndeavors extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_commercial',
        'description_commercial',
    ];
}
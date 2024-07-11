<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurExecutives extends Model
{
    use HasFactory;

    protected $table = "our_executives";

    protected $fillable = [
        'photo_path',
        'name_executive',
        'rol_executive',
        'phone_executive',
        'email_executive',
        'facebook_executive',
        'twitter_executive',
        'gplus_executive',
        'linkedin_executive'
    ];
}
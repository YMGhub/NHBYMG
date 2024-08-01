<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurDepartments extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function images()
    {
        return $this->hasMany(ImageOurDepartments::class);
    }
}
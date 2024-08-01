<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageOurDepartments extends Model
{
    use HasFactory;

    protected $fillable = ['our_departments_id', 'path'];

    public function gallery()
    {
        return $this->belongsTo(OurDepartments::class);
    }
}
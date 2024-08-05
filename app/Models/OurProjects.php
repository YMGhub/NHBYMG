<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurProjects extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function imagesOurProjects()
    {
        return $this->hasMany(ImagesOurProjects::class);
    }
}
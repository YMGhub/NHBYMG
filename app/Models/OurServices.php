<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurServices extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function imagesOurServices()
    {
        return $this->hasMany(ImagesOurServices::class);
    }
}
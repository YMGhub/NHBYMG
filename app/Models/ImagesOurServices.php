<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesOurServices extends Model
{
    use HasFactory;

    protected $fillable = ['our_services_id', 'path'];

    public function ourServices()
    {
        return $this->belongsTo(OurServices::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesOurProjects extends Model
{
    use HasFactory;

    protected $fillable = ['our_projects_id', 'path'];

    public function ourProject()
    {
        return $this->belongsTo(OurProjects::class);
    }
}
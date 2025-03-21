<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyCategory extends Model
{
    protected $fillable = ['name'];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
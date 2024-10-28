<?php

// app/Models/Property.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'address',
        'area',
        'bedrooms',
        'bathrooms',
        'featured',
        'status',
        'price_or_rent_type',
        'category',
        'google_map_propertie',
        'author'
    ];


    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }

    public function category()
    {
        return $this->belongsTo(PropertyCategory::class);
    }
}

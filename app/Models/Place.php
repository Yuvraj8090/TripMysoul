<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

public function destinationDetails()
    {
        return $this->hasMany(DestinationDetail::class);
    }

    // Accessor to get the full name_state attribute
    public function getFullNameStateAttribute()
    {
        return $this->name_state;
    }
   

    
    protected $fillable = [
        'name', 'Video', 'gallery', // Add other attributes as needed
    ];
    
    public function getGalleryAttribute($value)
    {
        return json_decode($value, true);
    }

    
}
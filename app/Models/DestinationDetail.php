<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\DatesPackage; // Import the DatesPackage model

class DestinationDetail extends Model
{
    use HasFactory;

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function datesPackages()
    {
        return $this->hasMany(DatesPackage::class, 'Packages_name', 'id');
    }
}

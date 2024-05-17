<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = ['id', 'name', 'amount']; // Define fillable fields

    public function destinationDetails()
    {
        return $this->hasMany(DestinationDetail::class);
    }

    // Accessor to get the full name attribute
    public function getFullNameAttribute()
    {
        return $this->name;
    }
}

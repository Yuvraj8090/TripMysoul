<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatesPackage extends Model
{
    use HasFactory;

    protected $table = 'dates_packages';

    protected $fillable = [
        'Packages_name', 'date_from', 'date_to', 'offer_id', // Add your columns here
    ];

    public function destinationDetail()
    {
        return $this->belongsTo(DestinationDetail::class);
    }

    public function offer()
    {
        return $this->belongsTo(\App\Models\Offer::class);
    }
}

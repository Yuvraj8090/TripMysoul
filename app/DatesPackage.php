<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatesPackage extends Model
{
    use HasFactory;

    public function destinationDetail()
    {
        return $this->belongsTo(DestinationDetail::class);
    }
    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}

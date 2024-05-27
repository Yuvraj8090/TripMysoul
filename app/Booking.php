<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_name',
        'cust_name',
        'cust_num',
        'cust_email',
        'cust_memb',
        'trip_start',
        'days',
        'trip_end',
        'total_amount',
        'deposited_amount',
        'trxid',
        'status',
    ];
}

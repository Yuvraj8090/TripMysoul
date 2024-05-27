<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'email', 
        'phone_number', 
        'package_name', 
        'package_dates_start', 
        'package_dates_end', 
        'number_of_members'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfectcar extends Model
{
    use HasFactory;

    protected $fillable = [
        'city', 'pickupdate','pickuptime', 'package', 'cartype',
    ];
}

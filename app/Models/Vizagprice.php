<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vizagprice extends Model
{
    use HasFactory;

    protected $fillable = [
        'cartype', 'acprice','price', 'fueltype', 'seats', 'extrakm', 'city_id', 'image',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Findcar extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'mobile','location', 'pickdate','picktime','package','cartype', 
        ];
}

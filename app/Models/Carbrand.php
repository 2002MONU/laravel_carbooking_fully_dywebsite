<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carbrand extends Model
{
    use HasFactory;
    protected $fillable = [
        'carname', 'carimage',
    ];
}

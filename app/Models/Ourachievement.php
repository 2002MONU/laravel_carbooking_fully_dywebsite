<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ourachievement extends Model
{
    use HasFactory;
    protected $fillable = [
        'happycust', 'corpsur','experience', 'surcity',
    ];
}

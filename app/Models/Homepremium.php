<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepremium extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading', 'image','para1', 'para2', 'slug', 'status',
    ];
}

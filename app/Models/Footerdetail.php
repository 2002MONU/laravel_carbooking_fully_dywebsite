<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footerdetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'mobile', 'email','address', 'location','about','logo', 
        ];
}

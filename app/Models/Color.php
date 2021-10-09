<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Color extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = [
        'color_name',
        'color_code',
        'is_active',
    ];
}

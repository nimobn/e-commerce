<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Feature extends Model
{
    use HasFactory, softDeletes;
    
    protected $fillable = [
        'category', 'features'
    ];
}

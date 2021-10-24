<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
        'has_child',
        'path',
        'is_active',
    ];
}

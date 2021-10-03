<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
class Comment extends Model
{
    use HasFactory, softDeletes;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

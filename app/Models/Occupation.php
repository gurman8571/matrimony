<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Occupation extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function getnameAttribute($value)
    {
        return ucfirst($value);
    }
}

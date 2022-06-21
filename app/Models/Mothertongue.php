<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mothertongue extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="mothertongue";
    public function getnameAttribute($value)
    {
        return strtolower($value);
    }
}

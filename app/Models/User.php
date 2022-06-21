<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements mustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    use Notifiable;

    public function Religion()
    {
        return $this->belongsTo(Religion::class);
    }

    public function Caste()
    {
        return $this->belongsTo(Caste::class);
    }
    public function Occupation()
    {
        return $this->belongsTo(Occupation::class);
    }
    public function Mothertongue()
    {
        return $this->belongsTo(Mothertongue::class);
    }
    public function Education()
    {
        return $this->belongsTo(Education::class);
    }
    public function Country()
    {
        return $this->belongsTo(Country::class);
    }
    public function State()
    {
        return $this->belongsTo(State::class);
    }
    public function likes()
    {
        $data= $this->hasMany(Like::class,'profile_id');
      //$data->toarray();
        return $data;
    }

}

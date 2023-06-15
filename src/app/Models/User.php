<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens,HasFactory, Notifiable;

    protected $table = 'userinfos';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'username',
        'company',
        'nationality',
        'is_admin'
    ];

    public $sortable = ['name',
    'phone',
    'email',
    'password',
    'username',
    'company',
    'nationality',
    'is_admin'
];

    protected $primaryKey = 'email';

    protected $keyType = 'string';

    public $incrementing = false;

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    
    public function getJWTCustomClaims()
    {
        return [];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Userinfo extends Authenticatable implements JWTSubject
{
    use HasFactory;
    use Sortable;

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

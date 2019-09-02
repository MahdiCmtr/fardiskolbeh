<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const STATE_ADMIN = 'admin';
    const STATE_ADVISOR = 'advisor';
    const STATE_NORMAL = 'normal';
    const STATE = [self::STATE_ADMIN, self::STATE_ADVISOR, self::STATE_NORMAL];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'name', 'password', 'type', 'phone', 'avatar', 'verify_code', 'verified_at', 'state'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function isAdmin()
    {
        return $this->type == self::STATE_ADMIN;
    }
    public function isAdvisor()
    {
        return $this->type == self::STATE_ADVISOR;
    }
    public function isNormal()
    {
        return $this->type == self::STATE_NORMAL;
    }

    // relation
    public function estate()
    {
        return $this->hasMany(Estate::class, 'user_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Lawyer;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, CanResetPassword;

    protected $table = 'users';

    protected $fillable = [
        'image',
        'email',
        'password',
        'role_id',
        'status',
        'remember_token',
        'provider',
        'provider_id',
        'last_login',
        'affiliate_id',
        'referred_by',
    ];

    protected $dates = [
        'last_login',
    ];

    protected $hidden = [
        'password',
        'provider_id',
    ];

    public function lawyer()
    {
        return $this->hasOne(Lawyer::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredUser extends Model
{
    use HasFactory;

    protected $table = 'registeredusers';

    protected $primarykey = 'id';

    protected $fillable = [
        'id',
        'username',
        'password',
        'first_name',
        'last_name',
        'email',
        'contact_no'
    ];
}

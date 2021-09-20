<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disclaimer extends Model
{
    use HasFactory;

    protected $table = 'disclaimers';

    protected $primaryKey = 'disclaimer_id';

    protected $fillable = [
        'lawyer_profile_id',
        'title',
        'body'
    ];
}

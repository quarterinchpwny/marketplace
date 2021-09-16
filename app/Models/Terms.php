<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terms extends Model
{
    use HasFactory;

    protected $table = 'terms_of_use';

    protected $primaryKey = 'term_id';

    protected $fillable = [
        'lawyer_profile_id',
       'title',
        'body'
    ];

}

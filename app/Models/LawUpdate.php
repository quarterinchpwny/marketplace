<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LawUpdate extends Model
{
    use HasFactory;

    protected $table = 'law_updates';

    protected $primaryKey = 'law_update_id';

    protected $fillable = [
        'lawyer_profile_id',
        'title',
        'body'
    ];
}

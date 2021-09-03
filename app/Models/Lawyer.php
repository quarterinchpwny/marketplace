<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Lawyer extends Model
{

    protected $table = 'lawyer_profile';

    protected $primaryKey = 'lawyer_profile_id';

    protected $fillable = [
        'user_id',
        'lawyer_type_id',
        'specialization_id',
        'first_name',
        'middle_name',
        'last_name',
        'contact_number',
        'address1',
        'province',
        'city',
        'gender',
        'marital_status',
        'citizenship',
        'bank_account_name',
        'bank_account_number',
        'bank_account_branch',
        'bank_account_type',
        'roll_number',
        'admitted_at',
        'ibp_chapter',
        'ibp_number',
        'ibp_date_issued',
        'has_mcle',
        'mcle_date_issued',
        'mcle_date_of_expiry',
        'mcle_number',
        'timezone',
        'available',
        'facebook',
        'country',
        'tin_number',
        'date_of_birth',
        'status',
        'terms_and_condition_agreement',
        'curriculum_vitae_completed',
    ];

    protected $dates = [
        'admitted_at',
        'ibp_date_issued',
        'mcle_date_issued',
        'mcle_date_of_expiry',
        'date_of_birth',
    ];

    protected $casts = [
        'terms_and_condition_agreement' => 'boolean',
        'curriculum_vitae' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }
}
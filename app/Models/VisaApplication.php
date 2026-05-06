<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisaApplication extends Model
{
    protected $fillable = [
        'full_name', 'email', 'phone', 'date_of_birth',
        'passport_number', 'destination_country', 'visa_type',
        'preferred_center', 'intended_travel_date',
        'status', 'admin_notes', 'rejection_reason', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

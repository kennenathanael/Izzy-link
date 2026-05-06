<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DrivingApplication extends Model
{
    protected $fillable = [
        'full_name', 'email', 'phone', 'date_of_birth',
        'preferred_center', 'preferred_schedule',
        'license_type', 'status', 'notes', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

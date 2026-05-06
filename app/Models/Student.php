<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id', 'full_name', 'phone', 'nationality',
        'date_of_birth', 'city', 'preferred_center',
        'passport_number', 'profile_photo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fileTrackings()
    {
        return $this->hasMany(FileTracking::class, 'user_id', 'user_id');
    }
}

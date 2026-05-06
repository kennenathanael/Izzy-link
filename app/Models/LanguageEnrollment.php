<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LanguageEnrollment extends Model
{
    protected $fillable = [
        'full_name', 'email', 'phone', 'language',
        'course_type', 'preferred_schedule', 'preferred_center',
        'current_level', 'status', 'notes', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

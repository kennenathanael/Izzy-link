<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FileTracking extends Model
{
    protected $fillable = [
        'user_id', 'reference_number', 'service_type',
        'service_id', 'current_status', 'status_history',
        'assigned_agent', 'expected_completion_date',
        'latest_update', 'is_archived'
    ];

    protected $casts = [
        'status_history' => 'array',
        'is_archived'    => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Auto-generate reference number before creating
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->reference_number = 'EG-' . date('Y') . '-' . str_pad(
                FileTracking::count() + 1, 5, '0', STR_PAD_LEFT
            );
        });
    }
}

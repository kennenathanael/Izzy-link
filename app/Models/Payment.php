<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'user_id', 'transaction_reference', 'payment_method',
        'phone_number', 'amount', 'currency', 'purpose',
        'status', 'payment_proof', 'notes', 'paid_at', 'full_name',
    'email',
    'phone',
    'plan',
    'payment_method',
    'transaction_id',
    'notes',
    'status',
    ];

    protected $casts = [
        'paid_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Auto-generate transaction reference
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->transaction_reference = 'TXN-' . strtoupper(uniqid());
        });
    }
}

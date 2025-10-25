<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    /** @use HasFactory<\Database\Factories\NotificationFactory> */
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_read' => 'boolean',
    ];

    public function scopeForUser($query, $userId)
    {
        return $query->where('receiver_id', $userId)
            ->whereIn('type', ['assignment-assign','payment-detail']);
    }

    public function scopeForAdmin($query, $userId)
    {
        return $query->where('receiver_id', $userId)
            ->whereIn('type',['assignment-action', 'payment-request']);
    }

    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

}

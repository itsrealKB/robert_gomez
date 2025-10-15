<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Assignment extends Model
{
    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function docs(): HasMany
    {
        return $this->hasMany(AssignmentDocument::class);
    }

    public function assignment_logs(): HasMany
    {
        return $this->hasMany(AssignmentLog::class);
    }

    public function assignment_payments(): HasMany
    {
        return $this->hasMany(AssignmentPayment::class);
    }
}

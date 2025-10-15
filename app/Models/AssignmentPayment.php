<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AssignmentPayment extends Model
{
    protected $guarded = [];

    public function assignment():BelongsTo
    {
        return $this->belongsTo(Assignment::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AssignmentDocument extends Model
{
    protected $guarded = [];

    public function assignment(): BelongsTo
    {
        return $this->belongsTo(Assignment::class);
    }
    public function getFile()
    {
        $relativePath = 'assignment-docs/' . $this->file;

        if (!empty($this->file) && file_exists(public_path($relativePath))) {

            return public_path('assignment-docs/'.$this->file);
        } else {
            return "";
        }
    }
}

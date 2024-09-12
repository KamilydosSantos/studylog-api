<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudySession extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'description', 'study_date', 'total_study_time', 'is_posted', 'posted_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(Study::class);
    }
}

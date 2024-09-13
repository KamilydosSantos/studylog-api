<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StudySession extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'description', 'study_date', 'total_study_time', 'is_posted', 'posted_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function saved_study_sessions(): HasMany
    {
        return $this->hasMany(SavedStudySession::class);
    }
}

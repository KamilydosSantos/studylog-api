<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SavedStudySession extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'study_session_id'];

    public $timestamps = false;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function study_session(): BelongsTo
    {
        return $this->belongsTo(StudySession::class);
    }
}

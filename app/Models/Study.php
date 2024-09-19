<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Study extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'category_id', 'study_session_id', 'start_time', 'end_time', 'total_time'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function study_session(): BelongsTo
    {
        return $this->belongsTo(StudySession::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserFollower extends Pivot
{
  protected $fillable = ['follower_id', 'followed_id'];
}

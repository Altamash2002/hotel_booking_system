<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'stars',
        'comment',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

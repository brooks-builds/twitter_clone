<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function tweets()
    {
        return $this->belongsTo('\App\tweets');
    }

    public function user()
    {
        return $this->belongsTo('\App\User');
    }

    protected $fillable = [
        'user_id', 'text', 'tweets_id'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tweets extends Model
{
    protected $fillable = [
        'text', 'user_id'
    ];

    public function comments()
    {
        return $this->hasMany('\App\Comment');
    }
}

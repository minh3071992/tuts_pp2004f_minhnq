<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'title',
        'content',
        'slug',
        'status',
        'user_id'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
}

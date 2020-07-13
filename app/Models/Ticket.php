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

    protected $guarded = ['id'];


    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'post');
    }
}

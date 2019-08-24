<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserComment extends Model
{
    protected $fillable = [
        'name', 'comment', 'question_id',
    ];

    protected  $table = 'user_comments';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserQuestion extends Model
{
    protected $fillable = [
        'question','qsn_id'
    ];
    protected $table='user_questions';
}

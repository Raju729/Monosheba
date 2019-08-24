<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psychiatric extends Model
{
    protected $fillable = [
        'city','name','phone_no','speciality','joblocation','designation'
    ];
    protected $table='psychiatrics';
}

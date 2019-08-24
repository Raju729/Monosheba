<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'email','phone','address','subject','description'];

    protected $table='contacts';
}
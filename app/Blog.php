<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'name',
        'url', 
        'description',
        'titel',
        'time'
    ];
    public $timestamps = false;
}

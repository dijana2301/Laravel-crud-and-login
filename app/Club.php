<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $table = "clubs";

    protected $fillable = [
        'id', 'name', 'address', 'email', 'website', 'dateOfFoundation', 'director', 'history', 'thumbnail'
    ];

}

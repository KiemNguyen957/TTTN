<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorylist extends Model
{
    protected $table='categorylist';
    protected $fillable=[
        'name'
    ];
}

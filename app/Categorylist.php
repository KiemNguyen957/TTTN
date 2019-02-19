<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorylist extends Model
{
    protected $table='categorylist';
    protected $fillable=[
        'name',
        'slug',
    ];
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id','id'); 
    }
}

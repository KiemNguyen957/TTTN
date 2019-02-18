<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $fillable=[
        'name',
        'image',
        'price',
        'sale',
        'promotion',
        'screen',
        'operating_system',
        'camera',
        'cpu',
        'ram',
        'memory',
        'memory_card',
        'pin',
        'description',
        'category_id',
    ];
    public function categorylist()
    {
        return $this->belongsTo(Categorylist::class, 'category_id','id'); 
    }
}

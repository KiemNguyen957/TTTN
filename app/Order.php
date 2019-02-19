<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='oders';
    protected $fillable=[
        'code',
        'detail',
        'user_id',
        'unit_price',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id'); 
    }
}

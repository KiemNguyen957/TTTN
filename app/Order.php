<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';
    protected $fillable=[
        'code',
        'detail',
        'user_id',
        'total_price',
        'address',
        'phone',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id'); 
    }
}

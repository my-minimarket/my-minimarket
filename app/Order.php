<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date_bill', 'date_order'
    ];
    /*public function orders()
    {
        return $this->belongsTo('App\Order');
    }
    public function customers()
    {
        return $this->belongsTo('App\Customer');
    }*/
}
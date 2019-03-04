<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'price', 'weight', 'stock', 'picture'
    ];

    public $timestamps = true;

    public function category()
    {
        return $this->belongsToMany('App\Product');
    }
}

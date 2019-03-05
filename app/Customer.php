<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'password', 'phone', 'email'
    ];

    public $timestamps = true;

    public function categories()
    {
        return $this->belongsToMany('App\Address', 'addresses');
    }
}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';
    /* Définit la table : Je protège ma table addresses*/

    protected $fillable = [
        'street', 'city', 'complement', 'postal_code', 'country'
    /* Définit les composants qui sont modifiables !*/
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
    /* Définit les relations avec les autres tables !*/
}

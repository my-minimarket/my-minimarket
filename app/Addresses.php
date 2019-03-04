<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    protected $table = 'addresses';
    /* Définit la table : Je protège ma table addresses*/

    protected $fillable = [
        'street', 'city', 'complement', 'postal_code', 'country'
    /* Définit les composants qui sont modifiables !*/
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
    /* Définit les relations avec les autres tables !*/
}

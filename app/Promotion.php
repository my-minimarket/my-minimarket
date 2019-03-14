<?php
/**
 * Created by PhpStorm.
 * User: Edita
 * Date: 14/03/2019
 * Time: 10:09
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'promotions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date_start', 'date_end', 'percentage', 'discount_amount'
    ];

    public $timestamps = true;

    /**
     * @return mixed
     */
    public function products()
    {
        return $this->belongsToMany('App\Product', 'products_promotions');
    }
}
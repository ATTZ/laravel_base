<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'people';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'number', 'coupon', 'region_id', 'school_id', 'class', 'phone' , 'type'];

    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeoplePass extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'people_passes';

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
    protected $fillable = ['event_id', 'mission_id', 'people_id', 'score'];

    
}

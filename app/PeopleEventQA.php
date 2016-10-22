<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeopleEventQA extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'people_event_q_as';

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
    protected $fillable = ['event_id', 'QA_id', 'people_id', 'score'];

    
}

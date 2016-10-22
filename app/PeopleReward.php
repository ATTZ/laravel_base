<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeopleReward extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'people_rewards';

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
    protected $fillable = ['people_id', 'reward_id'];

    
}
